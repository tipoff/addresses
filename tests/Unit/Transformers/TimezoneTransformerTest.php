<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Transformers;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Arr;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Tests\TestCase;

class TimezoneTransformerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function transform()
    {
        /** @var Timezone $timezone */
        $timezone = Timezone::factory()->create();

        $data = fractal($timezone, $timezone->getTransformer())->toArray();

        $this->assertEquals($timezone->php, Arr::get($data, 'data.php'));
    }
}
