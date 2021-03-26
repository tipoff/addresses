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
        $title = 'My ' . $this->faker->unique()->country; // Adjust country name because randomly will get USA which already exists in DB
        // keep creating an abbreviation until is isn't 'usa'
        do {
            $abbreviation = $this->faker->unique()->lexify('???');
        }while(($slug = Str::slug($abbreviation)) !== 'usa');

        return [
            'slug' => $slug,
            'title' => $title,
            'official' => $title,
            'abbreviation' => $abbreviation,
            'independent' => $this->faker->boolean,
            'un_member' => $this->faker->boolean,
            'landlocked' => $this->faker->boolean,
        ];
    }
}
