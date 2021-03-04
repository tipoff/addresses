<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodesTable extends Migration
{
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->string('code', 5)->unique()->primary(); // Actual ZIP Code. Has to be string because can have leading zeros. Check model to see how it is made Primary Key.
            $table->string('timezone')->nullable();
            $table->decimal('latitude', 4, 2)->nullable();
            $table->decimal('longitude', 5, 2)->nullable();
            $table->string('county')->nullable();
            $table->foreignIdFor(app('state'));
            $table->foreignIdFor(app('city'), 'city_id');
            $table->foreignIdFor(app('city'), 'city_alternate_1')->nullable();
            $table->foreignIdFor(app('city'), 'city_alternate_2')->nullable();
            $table->foreignIdFor(app('city'), 'city_alternate_3')->nullable();
            $table->foreignIdFor(app('city'), 'city_alternate_4')->nullable();
            $table->boolean('decommissioned')->default(0)->index(); // 1 if decommissioned
            $table->timestamps();
        });

        Schema::table('zip_codes', function ($table) {
            $table->foreign('state_id')->references('id')->on('states')->onDelete('restrict')->onUpdate('cascade');
        });
    }
}
