<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Zip;

class CreateCityZipTable extends Migration
{
    public function up()
    {
        Schema::create('city_zip', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(City::class);
            $table->foreignIdFor(Zip::class);
            $table->boolean('primary')->default(false);
            $table->timestamps();
        });
    }
}
