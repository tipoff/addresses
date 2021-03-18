<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
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
            Text::make('Slug')->sortable(),
            Text::make('Title')->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('Slug'),
            Text::make('Title'),
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
        return [
            ID::make(),
        ];
    }
}
