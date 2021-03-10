<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Transformers;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Arr;
use Tipoff\Addresses\Models\Country;
use Tipoff\Addresses\Tests\TestCase;

class CountryTransformerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function transform()
    {
        /** @var Country $country */
        $country = Country::factory()->create();

        $data = fractal($country, $country->getTransformer())->toArray();

        $this->assertEquals($country->title, Arr::get($data, 'data.title'));
    }
}
