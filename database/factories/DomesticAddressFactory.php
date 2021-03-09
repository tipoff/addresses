<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\Addresses\Models\DomesticAddress;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Zip;

class DomesticAddressFactory extends Factory
{
    protected $model = DomesticAddress::class;

    public function definition()
    {
        return [
            'address_line_1' => $this->faker->streetAddress,
            'city_id' => randomOrCreate(City::class),
            'zip_id' => randomOrCreate(Zip::class),
        ];
    }
}
