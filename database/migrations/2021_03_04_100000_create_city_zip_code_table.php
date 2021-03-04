<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\ZipCode;

class CreateCityZipCodeTable extends Migration
{
    public function up()
    {
        Schema::create('city_zip_code', function (Blueprint $table) {
            $table->foreignIdFor(City::class);
            $table->foreignIdFor(ZipCode::class);
            $table->boolean('primary')
                ->default(false);
            $table->timestamps();
        });
    }
}