<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Transformers;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Arr;
use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Tests\TestCase;

class AddressTransformerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function transform()
    {
        /** @var Address $address */
        $address = Address::factory()->create();

        $data = fractal($address, $address->getTransformer())->toArray();

        $this->assertEquals($address->first_name, Arr::get($data, 'data.first_name'));
        $this->assertNotNull(Arr::get($data, 'data.domestic_address'));
    }
}
