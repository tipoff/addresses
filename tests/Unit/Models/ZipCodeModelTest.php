<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\ZipCode;
use Tipoff\Addresses\Tests\TestCase;

class ZipCodeModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = ZipCode::factory()->create();
        $this->assertNotNull($model);
    }
}
