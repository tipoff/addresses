<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\DomesticAddress;
use Tipoff\Addresses\Models\Zip;
use Tipoff\Addresses\Tests\TestCase;

class DomesticAddressModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = DomesticAddress::factory()->create();
        $this->assertNotNull($model);
    }

    /** @test */
    public function create_address_valid_city_and_zip()
    {
        /** @var City $city */
        $city = City::factory()->create();
        /** @var Zip $zip */
        $zip = Zip::factory()->create();

        $address = DomesticAddress::createDomesticAddress('line1', null, $city->title, $zip->code);
        $this->assertEquals('line1', $address->address_line_1);
        $this->assertNull($address->address_line_2);
        $this->assertEquals($city->id, $address->city_id);
        $this->assertEquals($zip->code, $address->zip_code);

        $sameAddress = DomesticAddress::createDomesticAddress('line1', null, $city, $zip);
        $this->assertEquals($address->id, $sameAddress->id);
    }

    /** @test */
    public function create_address_invalid_zip()
    {
        /** @var City $city */
        $city = City::factory()->create();

        $this->expectException(ModelNotFoundException::class);
        $this->expectExceptionMessage('No query results for model [Tipoff\Addresses\Models\Zip] 12345');

        DomesticAddress::createDomesticAddress('line1', null, $city->title, '12345');
    }
}
