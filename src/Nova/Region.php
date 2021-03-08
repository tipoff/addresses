<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Tipoff\Support\Nova\BaseResource;

class Region extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\Region::class;

    public static $title = 'id';

    public static $search = [
        'id', 'name',
    ];

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('Slug'),
            Text::make('Name')
        ]);
    }

    protected function dataFields(): array
    {
        return [
            ID::make(),
            nova('user') ? BelongsTo::make('Updated By', 'updater', nova('user'))->exceptOnForms() : null,
            nova('user') ? BelongsTo::make('Created By', 'creator', nova('user'))->exceptOnForms() : null,
            Date::make('Created At')->exceptOnForms(),
            Date::make('Updated At')->exceptOnForms(),
        ];
    }
}
