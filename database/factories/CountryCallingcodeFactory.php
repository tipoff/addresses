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
        $code = $this->faker->numerify('######');

        return [
            'country_id' => randomOrCreate(app('country')),
            'code' => $code,
            'display' => $code,
            'creator_id' => randomOrCreate(app('user')),
            'updater_id' => randomOrCreate(app('user'))
        ];
    }
}
