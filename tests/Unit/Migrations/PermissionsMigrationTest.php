<?php

declare(strict_types=1);

namespace Tipoff\Adddresses\Tests\Unit\Migrations;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Tipoff\Addresses\Tests\TestCase;

class PermissionsMigrationTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function permissions_seeded()
    {
        $this->assertTrue(Schema::hasTable('permissions'));

        $seededPermissions = app(Permission::class)->whereIn('name', [
            'view addresses',
            'create addresses',
            'update addresses',
            'view cities',
            'create cities',
            'update cities',
            'view countries',
            'create countries',
            'update countries',
            'view country calling codes',
            'create country calling codes',
            'update country calling codes',
            'view phone areas',
            'create phone areas',
            'update phone areas',
            'view phones',
            'create phones',
            'update phones',
            'view regions',
            'create regions',
            'update regions',
            'view states',
            'create states',
            'update states',
            'view timezones',
            'create timezones',
            'update timezones',
            'view zip codes',
            'create zip codes',
            'update zip codes',
        ])->pluck('name');

        $this->assertCount(21, $seededPermissions);
    }
}
