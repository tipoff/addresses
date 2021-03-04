<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressablesTable extends Migration
{
    public function up()
    {
        Schema::create('addressables', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(app('addresses'))->index();
            $table->morphs('addressable');
            $table->string('primary_billing')->nullable();
            $table->string('primary_shipping')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('care_of')->nullable();
            $table->string('company')->nullable();
            $table->string('extended_zip')->nullable();
            $table->string('phone')->nullable();
            $table->foreignIdFor(app('user'), 'creator_id');
            $table->foreignIdFor(app('user'), 'updater_id');
            $table->timestamps();

            $table->unique(['address_id', 'addressable_id', 'addressable_type']);
        });
    }
}

