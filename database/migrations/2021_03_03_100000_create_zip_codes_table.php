<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tipoff\Addresses\Models\State;
use Tipoff\Addresses\Models\Region;

class CreateZipCodesTable extends Migration
{
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->string('code', 5)->unique()->primary(); // Actual ZIP Code. Has to be string because can have leading zeros. Check model to see how it is made Primary Key.
            $table->foreignIdFor(State::class);
            $table->string('timezone')->nullable(); // @todo switch to use the timezone class
            $table->decimal('latitude', 4, 2)->nullable();
            $table->decimal('longitude', 5, 2)->nullable();
            $table->boolean('decommissioned')->default(0)->index(); // 1 if decommissioned
            $table->timestamps();
        });
    }
}
