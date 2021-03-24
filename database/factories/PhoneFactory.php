<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Tipoff\Addresses\Models\Phone;

class PhoneFactory extends Factory
{
    protected $model = Phone::class;

    public function definition()
    {
        return [
            'country_callingcode_id' => randomOrCreate(app('country_callingcode')),
            'full_number' => $this->faker->phoneNumber,
            'phone_area_id' => randomOrCreate(app('phone_area')),
            'creator_id' => randomOrCreate(app('user')),
            'updater_id' => randomOrCreate(app('user'))
        ];
    }
}