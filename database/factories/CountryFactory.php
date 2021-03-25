<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Tipoff\Addresses\Models\Country;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        $title = $this->faker->unique()->state;

        return [
            'slug' => Str::slug($abbreviation),
            'title' => $title,
            'official' => $title,
            'abbreviation' => $this->faker->unique()->lexify('???'),
        ];
    }
}
