<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Tipoff\Support\Nova\BaseResource;

class Country extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\Country::class;

    public static $title = 'id';

    public static $search = [
        'id',
        'title',
        'abbreviation',
    ];
    
    public static $group = 'Resources';

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
            Text::make('Slug')->sortable(),
            Text::make('Title')->sortable(),
            Text::make('Abbreviation')->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('Slug'),
            Text::make('Title'),
            Text::make('Abbreviation'),
            Text::make('Capital')->nullable(),
            nova('state') ? HasMany::make('States', 'states', nova('state'))->searchable() : null,
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
