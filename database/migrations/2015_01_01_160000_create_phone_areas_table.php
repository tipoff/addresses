<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneAreasTable extends Migration
{
    public function up()
    {
        Schema::create('phone_areas', function (Blueprint $table) {
            $table->string('code', 3)->index(); // May not start with 1 or 0 - https://en.wikipedia.org/wiki/North_American_Numbering_Plan
            $table->foreignIdFor(app('state'))->nullable();
        });
    }
}