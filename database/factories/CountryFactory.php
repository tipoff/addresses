<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Models\Country;
use Tipoff\Addresses\Models\Timezone;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        $title = $this->faker->unique()->state;

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'abbreviation' => $this->faker->unique()->lexify('??'),
        ];
    }
}
