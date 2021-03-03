<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTable extends Migration
{
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index();
            $table->string('title')->unique();
            $table->string('abbreviation', 2)->unique();
            $table->string('description')->nullable(); // Description for search & social share purposes.
            $table->unsignedInteger('image_id')->nullable()->index(); // Featured image for social sharing.
            $table->unsignedInteger('icon_id')->nullable(); // If will use country outline for menu navigation. Should we have small icon and heroicon?
            $table->string('capital')->nullable();
            $table->timestamps();
        });
    }
}
