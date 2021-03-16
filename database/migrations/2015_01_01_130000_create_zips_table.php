<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipsTable extends Migration
{
    public function up()
    {
        Schema::create('zips', function (Blueprint $table) {
            $table->string('code', 5)->unique()->primary(); // Actual ZIP Code. Has to be string because can have leading zeros. Check model to see how it is made Primary Key.
            $table->foreignIdFor(app('state'));
            $table->foreignIdFor(app('region'))->nullable();
            $table->foreignIdFor(app('timezone'))->nullable();
            $table->decimal('latitude', 9, 6)->nullable();
            $table->decimal('longitude', 8, 6)->nullable();
            $table->boolean('decommissioned')->default(0)->index(); // 1 if decommissioned
            $table->timestamps();
        });
    }
}
