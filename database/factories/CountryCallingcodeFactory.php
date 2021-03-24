<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Tipoff\Addresses\Models\CountryCallingcode;

class CountryCallingcodeFactory extends Factory
{
    protected $model = CountryCallingcode::class;

    public function definition()
    {

        return [
            'country_id' => randomOrCreate(app('country')),
            'code' => $this->faker->areaCode
        ];
    }
}
