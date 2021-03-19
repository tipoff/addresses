<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(app('state'))->index();
            $table->string('slug')->index();
            $table->string('title');
            
            $table->foreignIdFor(app('user'), 'creator_id')->nullable();
            $table->foreignIdFor(app('user'), 'updater_id')->nullable();
            $table->timestamps();
            
            $table->unique(['state_id', 'slug'], 'city_unique');
        });
    }
}
