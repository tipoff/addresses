<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Transformers;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Arr;
use Tipoff\Addresses\Models\State;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Tests\TestCase;

class StateTransformerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function transform()
    {
        /** @var State $state */
        $state = State::factory()->create();

        $data = fractal($state, $state->getTransformer())->toArray();

        $this->assertEquals($state->title, Arr::get($data, 'data.title'));
    }

    /** @test */
    public function transform_with_includes()
    {
        /** @var State $state */
        $state = State::factory()->create();

        $data = fractal($state, $state->getTransformer())
            ->parseIncludes(['country'])
            ->toArray();

        $this->assertNotNull(Arr::get($data, 'data.country'));
    }

}
