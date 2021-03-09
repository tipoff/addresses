<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Tipoff\Support\Nova\BaseResource;
use Laravel\Nova\Panel;

class Timezone extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\Timezone::class;

    public static $title = 'title';

    public static $search = [
        'id',
    ];

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('Name')->required()->creationRules('unique:timezones,name'),
            Text::make('Title')->required()->creationRules('unique:timezones,title'),
            Text::make('Php')->required()->creationRules('unique:timezones,php'),
            Boolean::make('Is daylight saving')->required()->default(1),
            Number::make('Dst')->min(-9999.99)->max(9999.99)->step(0.01)->nullable(),
            Number::make('Standard')->min(-9999.99)->max(9999.99)->step(0.01)->nullable(),

            new Panel('Data Fields', $this->dataFields()),
        ]);
    }

    public function dataFields(): array
    {
        return array_merge(
            parent::dataFields(),
        );
    }
}
