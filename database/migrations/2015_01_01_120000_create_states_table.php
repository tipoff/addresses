<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique()->index();
            $table->string('title')->unique();
            $table->string('abbreviation', 2)->unique();
            $table->string('description')->nullable();
            $table->string('capital')->nullable();
            $table->foreignIdFor(app('country'));
            $table->timestamps();
        });
    }
}
