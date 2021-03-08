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

class Address extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\Address::class;

    public static $title = 'id';

    public static $search = [
        'id',
        'address_line_1',
    ];

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
            Text::make('Address Line 1', function () {
                return $this->address_line_1;
            }),
            Text::make('City', 'city.id', function () {
                return $this->city->title;
            })->sortable(),
            Text::make('Zip', 'zip.code', function () {
                return $this->zip->code;
            })->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Text::make('Address Line 1'),
            Text::make('Address Line 2'),
            nova('city') ? BelongsTo::make('City', 'city', nova('city'))->searchable() : null,
            nova('zip') ? BelongsTo::make('Zip', 'zip', nova('zip'))->searchable() : null,
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
