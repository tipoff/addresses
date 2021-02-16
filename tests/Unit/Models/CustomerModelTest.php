<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\Customer;
use Tipoff\Addresses\Tests\TestCase;

class CustomerModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = Customer::factory()->create();
        $this->assertNotNull($model);
    }
}
