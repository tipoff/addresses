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

class State extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\State::class;

    public static $title = 'id';

    public static $search = [
        'id',
        'title',
        'abbreviation'
    ];

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
            Text::make('Title')->sortable(),
            Text::make('Abbreviation')->sortable(),
            Text::make('Country', 'country.id', function () {
                return $this->country->title;
            })->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('Slug'),
            Text::make('Title'),
            Text::make('Abbreviation'),
            Text::make('Description'),
            Text::make('Capital'),
            nova('country') ? BelongsTo::make('Country', 'country', nova('country'))->searchable() : null,
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
