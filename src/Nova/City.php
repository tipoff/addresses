<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
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
            Text::make('State', 'state.id', function () {
                return $this->state->title;
            })->sortable(),
            Text::make('Slug')->sortable(),
            Text::make('Title')->sortable(),
            Boolean::make('Incorporated')->default(true)->sortable(),
            Boolean::make('Military')->default(true)->sortable(),
            Boolean::make('Township')->default(true)->sortable(),
            Text::make('Timezone', 'timezone.id', function () {
                return $this->timezone->title;
            })->sortable(),
            Number::make('Population')->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            nova('state') ? BelongsTo::make('State', 'state', nova('state'))->searchable() : null,
            Text::make('Slug'),
            Text::make('Title'),

            Boolean::make('Incorporated')->required()->default(true),
            Boolean::make('Military')->required()->default(true),
            Boolean::make('Township')->required()->default(true),
            nova('timezone') ? BelongsTo::make('Timezone', 'timezone', nova('timezone'))->searchable() : null,
            Text::make('Latitude')->nullable(),
            Text::make('Longitude')->nullable(),
            Select::make('Importance')->options([
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
                5 => '5'
            ])->displayUsingLabels()->sortable(),
            Number::make('Population')->nullable(),
            Number::make('Population Proper')->nullable(),
            Number::make('density')->nullable(),

            nova('zip') ? BelongsToMany::make('Zips', 'zips', nova('zip'))
                ->fields(function () {
                    return [
                        Text::make('Primary')->default(false),
                    ];
                }) : null,
            nova('domestic_address') ? HasMany::make('Domestic Addresses', 'domestic addresses', nova('domestic_address'))->searchable() : null,
        ]);
    }

    protected function dataFields(): array
    {
        return array_merge(
            parent::dataFields(),
            $this->creatorDataFields(),
            $this->updaterDataFields(),
        );
    }
}
