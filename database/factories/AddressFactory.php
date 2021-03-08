<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Models\ZipCode;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition()
    {
        return [
            'address_line_1' => $this->faker->streetAddress,
            'city_id' => randomOrCreate(City::class),
            'zip_code_code' => randomOrCreate(ZipCode::class),
        ];
    }
}
