<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index();
            $table->string('title')->unique();
            $table->string('abbreviation', 2)->unique();
            $table->string('calling_code', 6)->nullable(); // https://en.wikipedia.org/wiki/List_of_country_calling_codes (may need to create separate table since some countries can have multiple)
            $table->string('capital')->nullable();
            $table->timestamps();
        });
    }
}
