<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Tests\TestCase;

class CityModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = City::factory()->create();
        $this->assertNotNull($model);
    }
}
