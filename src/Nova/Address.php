<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Tipoff\Support\Nova\BaseResource;

class Address extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\Address::class;

    public static $title = 'id';

    public static $search = [
        'id', 'first_name', 'last_name', 'type','care_of', 'company', 'extended_zip', 'phone',
    ];
    
    public static $group = 'Resources';

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
            Text::make('first_name')->sortable(),
            Text::make('last_name')->sortable(),
            Text::make('type')->sortable(),
            Text::make('care_of')->sortable(),
            Text::make('company')->sortable(),
            Text::make('extended_zip')->sortable(),
            Text::make('phone')->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('first_name'),
            Text::make('last_name'),
            Text::make('care_of'),
            Text::make('company'),
            Text::make('extended_zip'),
            Text::make('phone'),
        ]);
    }

    protected function dataFields(): array
    {
        return [
            ID::make(),
            DateTime::make('Created At')->exceptOnForms(),
            nova('user') ? BelongsTo::make('Creator', 'creator', nova('user'))->exceptOnForms() : null,
            nova('user') ? BelongsTo::make('Updated By', 'updater', nova('user'))->exceptOnForms() : null,
            DateTime::make('Updated At')->exceptOnForms(),
        ];
    }
}
