<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Tipoff\Support\Nova\BaseResource;

class Zip extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\Zip::class;

    public static $title = 'id';

    public static $search = [
        'id',
        'code',
    ];
    
    public static $group = 'Resources';

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
            Text::make('Code')->sortable(),
            Text::make('State', 'state.id', function () {
                return $this->state->title;
            })->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('Code'),
            Text::make('Timezone'),
            Text::make('Latitude'),
            Text::make('Latitude'),
            Boolean::make('Decommissioned'),
            nova('state') ? BelongsTo::make('State', 'state', nova('state'))->searchable() : null,
            nova('region') ? BelongsTo::make('Region', 'region', nova('region'))->searchable() : null,
            nova('timezone') ? BelongsTo::make('Timezone', 'timezone', nova('timezone'))->searchable() : null,
            nova('domestic_address') ? HasMany::make('Domestic Address', 'domestic address', nova('domestic_address'))->searchable() : null,
            nova('city') ? BelongsToMany::make('Cities', 'cities', nova('city'))
                ->fields(function () {
                    return [
                        Text::make('Primary')->default(false),
                    ];
                }) : null,
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
