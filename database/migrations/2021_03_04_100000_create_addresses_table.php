<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->foreignIdFor(app('city'));
            $table->foreignIdFor(app('zip_codes'), 'zip_code');
            $table->timestamps();
        });

        Schema::table('addresses', function ($table) {
            $table->foreign('city_id')->references('id')->on('city')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('zip_code')->references('code')->on('zip_codes')->onDelete('restrict')->onUpdate('cascade'); // Notice primary key is 'code' and not 'id'
        });
    }
}
