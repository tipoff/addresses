<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('country')->delete();

        \DB::table('country')->insert(array(
            0 =>
            array(
                'id' => 1,
                'slug' => 'usa',
                'title' => 'United States of America',
                'abbreviation' => 'US',
                'description' => null,
                'image_id' => null,
                'icon_id' => null,
                'capital' => 'Washington, D.C.',
                'created_at' => '2021-03-03 02:08:35',
                'updated_at' => '2021-03-03 02:08:35',
            )
        ));
    }
}
