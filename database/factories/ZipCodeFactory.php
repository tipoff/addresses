<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\Addresses\Models\State;
use Tipoff\Addresses\Models\ZipCode;

class ZipCodeFactory extends Factory
{
    protected $model = ZipCode::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('#####'),
            'state_id' => randomOrCreate(State::class),
        ];
    }
}
