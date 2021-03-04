<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Migrations;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Schema;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Tests\TestCase;

class TimezonesMigrationTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function timezones_seeded()
    {
        $this->assertTrue(Schema::hasTable('timezones'));

        $seededTimezones = Timezone::whereIn('name', [
            'EST',
            'CST',
            'MST',
            'MDT',
            'PST',
            'AKST',
            'HAST',
            'HADT',
        ])->pluck('name');

        $this->assertCount(8, $seededTimezones);
    }
}
