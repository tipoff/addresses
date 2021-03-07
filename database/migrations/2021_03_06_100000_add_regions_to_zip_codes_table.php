<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tipoff\Addresses\Models\Region;

class AddRegionsToZipCodesTable extends Migration
{
    public function up()
    {
        Schema::table('zip_codes', function (Blueprint $table) {
               $table->foreignIdFor(Region::class)->nullable();
        });
    }
}
