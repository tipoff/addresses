<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\ZipCode;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->foreignIdFor(City::class);
            $table->foreignIdFor(ZipCode::class);
            $table->timestamps();
            
            $table->unique(['address_line_1', 'address_line_2', 'city_id', 'zip_code_id']);
        });
    }
}
