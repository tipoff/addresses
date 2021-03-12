<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Tipoff\Support\Nova\BaseResource;

class City extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\City::class;

    public static $title = 'id';

    public static $search = [
        'id', 'title',
    ];
    
    public static $group = 'Resources';

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
            Text::make('Title')->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('Slug'),
            Text::make('Title'),
            Text::make('Description'),
        ]);
    }

    protected function dataFields(): array
    {
        return [
            ID::make(),
            Date::make('Created At')->exceptOnForms(),
            Date::make('Updated At')->exceptOnForms(),
        ];
    }
}
