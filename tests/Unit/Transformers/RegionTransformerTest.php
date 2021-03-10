<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Transformers;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Arr;
use Tipoff\Addresses\Models\Region;
use Tipoff\Addresses\Tests\TestCase;

class RegionTransformerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function transform()
    {
        /** @var Region $region */
        $region = Region::factory()->create();

        $data = fractal($region, $region->getTransformer())->toArray();

        $this->assertEquals($region->name, Arr::get($data, 'data.name'));
    }
}
