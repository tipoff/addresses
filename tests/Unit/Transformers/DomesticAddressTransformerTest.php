<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Transformers;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Arr;
use Tipoff\Addresses\Models\DomesticAddress;
use Tipoff\Addresses\Tests\TestCase;

class DomesticAddressTransformerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function transform()
    {
        /** @var DomesticAddress $domesticAddress */
        $domesticAddress = DomesticAddress::factory()->create();

        $data = fractal($domesticAddress, $domesticAddress->getTransformer())->toArray();

        $this->assertEquals($domesticAddress->address_line_1, Arr::get($data, 'data.address_line_1'));
    }

    /** @test */
    public function transform_with_includes()
    {
        /** @var DomesticAddress $domesticAddress */
        $domesticAddress = DomesticAddress::factory()->create();

        $data = fractal($domesticAddress, $domesticAddress->getTransformer())
            ->parseIncludes(['zip'])
            ->toArray();

        $this->assertNotNull(Arr::get($data, 'data.zip.data.code'));
    }
}
