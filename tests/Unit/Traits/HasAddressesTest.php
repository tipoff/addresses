<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Traits;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Zip;
use Tipoff\Addresses\Tests\TestCase;
use Tipoff\Addresses\Traits\HasAddresses;
use Tipoff\Authorization\Models\User;
use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Models\TestModelStub;

class HasAddressesTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function has_no_address()
    {
        TestModel::createTable();

        $model = new TestModel();
        $model->save();

        $address = $model->getAddressByType('shipping');
        $this->assertNull($address);

        $address = $model->getAddressByType('billing');
        $this->assertNull($address);

        $addresses = $model->addresses;
        $this->assertCount(0, $addresses);
    }

    /** @test */
    public function set_address_by_type()
    {
        TestModel::createTable();

        $model = new TestModel();
        $model->save();

        $this->actingAs(User::factory()->create());

        $city = City::factory()->create();
        $zip = Zip::factory()->create();

        $address = $model->setAddressByType('shipping', TestModel::createDomesticAddress('Line1', null, $city, $zip));
        $this->assertNotNull($address);

        $foundAddress = $model->getAddressByType('shipping');
        $this->assertEquals($address->id, $foundAddress->id);

        $foundAddress = $model->getAddressByType('billing');
        $this->assertNull($foundAddress);

        $addresses = $model->addresses;
        $this->assertCount(1, $addresses);
    }

    /** @test */
    public function multiple_addresses_by_type()
    {
        TestModel::createTable();

        $model = new TestModel();
        $model->save();

        $this->actingAs(User::factory()->create());

        $city = City::factory()->create();
        $zip = Zip::factory()->create();

        $model->setAddressByType('shipping', TestModel::createDomesticAddress('Line1', null, $city, $zip));
        $model->setAddressByType('billing', TestModel::createDomesticAddress('Line1', null, $city, $zip));
        $model->setAddressByType('contact', TestModel::createDomesticAddress('Contact1', null, $city, $zip));

        $this->assertDatabaseCount('domestic_addresses', 2);

        $foundAddress = $model->getAddressByType('shipping');
        $this->assertNotNull($foundAddress);

        $foundAddress = $model->getAddressByType('billing');
        $this->assertNotNull($foundAddress);

        $foundAddress = $model->getAddressByType('contact');
        $this->assertNotNull($foundAddress);

        $foundAddress = $model->getAddressByType('unknowb');
        $this->assertNull($foundAddress);

        $addresses = $model->addresses;
        $this->assertCount(3, $addresses);
    }

    /** @test */
    public function update_address_by_type()
    {
        TestModel::createTable();

        $model = new TestModel();
        $model->save();

        $this->actingAs(User::factory()->create());

        $city = City::factory()->create();
        $zip = Zip::factory()->create();

        $model->setAddressByType('shipping', TestModel::createDomesticAddress('Line1', null, $city, $zip));

        $model->setAddressByType('shipping', TestModel::createDomesticAddress('New Line1', 'New Line2', $city, $zip));

        $foundAddress = $model->getAddressByType('shipping');
        $this->assertEquals('New Line1', $foundAddress->domesticAddress->address_line_1);
        $this->assertEquals('New Line2', $foundAddress->domesticAddress->address_line_2);
    }

    /** @test */
    public function update_address_without_type()
    {
        TestModel::createTable();

        $model = new TestModel();
        $model->save();

        $this->actingAs(User::factory()->create());

        $city = City::factory()->create();
        $zip = Zip::factory()->create();

        $address = $model->setAddress(TestModel::createDomesticAddress('Line1', null, $city, $zip));
        $this->assertEquals(TestModel::class, $address->type);

        $model->setAddress(TestModel::createDomesticAddress('New Line1', 'New Line2', $city, $zip));

        $address = $model->getAddress();
        $this->assertEquals(TestModel::class, $address->type);
        $this->assertEquals('New Line1', $address->domesticAddress->address_line_1);
        $this->assertEquals('New Line2', $address->domesticAddress->address_line_2);
    }
}

class TestModel extends BaseModel
{
    use TestModelStub;
    use HasAddresses;
}
