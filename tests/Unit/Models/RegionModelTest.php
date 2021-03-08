<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\Region;
use Tipoff\Addresses\Tests\TestCase;

class RegionModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = Region::factory()->create();
        $this->assertNotNull($model);
    }
}
