<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Tipoff\Addresses\Models\Country;

class AddCountries extends Migration
{
    public function up()
    {

        if (class_exists(Country::class)) {
            foreach ([
                [
                    'id' => 1,
                    'slug' => 'usa',
                    'title' => 'United States of America',
                    'abbreviation' => 'US',
                    'capital' => 'Washington, D.C.',
                    'created_at' => '2021-03-03 02:08:35',
                    'updated_at' => '2021-03-03 02:08:35',
                ]
            ] as $country) {
                Country::firstOrCreate($country);
            }
        }
    }
}
