<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\Zip;
use Tipoff\Addresses\Tests\TestCase;

class ZipModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = Zip::factory()->create();
        $this->assertNotNull($model);
    }
}
