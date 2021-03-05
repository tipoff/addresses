<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\Addresses\Models\Timezone;

class TimezoneFactory extends Factory
{
    protected $model = Timezone::class;

    public function definition()
    {
        return [
            'name' => $this->faker->timezone,
            'title' => $this->faker->timezone,
            'php' => $this->faker->timezone,
            'is_daylight_saving' => $this->faker->boolean
        ];
    }
}
