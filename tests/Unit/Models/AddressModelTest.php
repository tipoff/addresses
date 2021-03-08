<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Tests\TestCase;

class AddressModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = Address::factory()->create();
        $this->assertNotNull($model);
    }
}
