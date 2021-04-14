<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Tipoff\Support\Nova\BaseResource;

class DomesticAddress extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\DomesticAddress::class;

    public static $title = 'title';

    public static $search = [
        'id',
        'address_line_1',
    ];

    public function title()
    {
        return "{$this->address_line_1} {$this->address_line_2} {$this->city->title} {$this->zip_code}";
    }
    
    public static $group = 'Resources';

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
            Text::make('Address Line 2')->nullable(),
            nova('city') ? BelongsTo::make('City', 'city', nova('city'))->searchable() : null,
            nova('zip') ? BelongsTo::make('Zip', 'zip', nova('zip'))->searchable() : null,
            
            /* @todo MorphOne::searchable does not exist  */
            /*nova('address') ? MorphOne::make('Address', 'address', nova('address'))->searchable() : null,*/
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
