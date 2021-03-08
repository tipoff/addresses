<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\Addresses\Models\State;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Models\Zip;

class ZipFactory extends Factory
{
    protected $model = Zip::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('#####'),
            'state_id' => randomOrCreate(State::class),
            'timezone_id' => randomOrCreate(Timezone::class),
        ];
    }
}
