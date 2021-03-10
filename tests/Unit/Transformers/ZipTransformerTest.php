<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Transformers;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Arr;
use Tipoff\Addresses\Models\Region;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Models\Zip;
use Tipoff\Addresses\Tests\TestCase;
use Tipoff\Addresses\Transformers\ZipTransformer;

class ZipTransformerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function transform()
    {
        /** @var Zip $zip */
        $zip = Zip::factory()->create();

        $data = fractal($zip, $zip->getTransformer())->toArray();

        $this->assertEquals($zip->code, Arr::get($data, 'data.code'));
        $this->assertNull(Arr::get($data, 'data.state'));
        $this->assertNull(Arr::get($data, 'data.region'));
        $this->assertNull(Arr::get($data, 'data.timezon'));
    }

    /** @test */
    public function transform_with_all_includes()
    {
        /** @var Zip $zip */
        $zip = Zip::factory()->create([
            'region_id' => Region::factory()->create(),
            'timezone_id' => Timezone::factory()->create(),
        ]);

        $data = fractal($zip, $zip->getTransformer())
            ->parseIncludes(['state', 'region', 'timezone'])
            ->toArray();

        $this->assertEquals($zip->code, Arr::get($data, 'data.code'));
        $this->assertNotNull(Arr::get($data, 'data.state'));
        $this->assertNotNull(Arr::get($data, 'data.region'));
        $this->assertNotNull(Arr::get($data, 'data.timezone'));
    }

    /** @test */
    public function transform_with_null_includes()
    {
        /** @var Zip $zip */
        $zip = Zip::factory()->create([
            'region_id' => null,
            'timezone_id' => null,
        ]);

        $data = fractal($zip, $zip->getTransformer())
            ->parseIncludes(['state', 'region', 'timezone'])
            ->toArray();

        $this->assertEquals($zip->code, Arr::get($data, 'data.code'));
        $this->assertNotNull(Arr::get($data, 'data.state'));
        $this->assertNull(Arr::get($data, 'data.region'));
        $this->assertNull(Arr::get($data, 'data.timezone'));
    }
}
