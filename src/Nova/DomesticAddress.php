<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use EmilianoTisato\GoogleAutocomplete\AddressMetadata;
use EmilianoTisato\GoogleAutocomplete\GoogleAutocomplete;
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

    public static $search = [
        'id',
        'address_line_1',
    ];

    public static $title = 'address_line_1';

    public function subtitle()
    {
        return "{$this->city->title}, {$this->city->state->abbreviation} {$this->zip_code}";
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
            GoogleAutocomplete::make('Address')
                ->countries('US')
                ->withValues(['street_number.long_name','locality.long_name','postal_code.short_name','administrative_area_level_1.short_name'])->onlyOnForms(),
            AddressMetadata::make(['Address Line 1'])->fromValue('street_number')->onlyOnForms(),
            AddressMetadata::make(['City'])->fromValue('locality')->onlyOnForms(),
            AddressMetadata::make(['Zip'])->fromValue('postal_code')->onlyOnForms(),
            Text::make('Address Line 1')->exceptOnForms(),
            Text::make('Address Line 2')->nullable(),
            nova('city') ? BelongsTo::make('City', 'city', nova('city'))->exceptOnForms(), : null,
            nova('zip') ? BelongsTo::make('Zip', 'zip', nova('zip'))->exceptOnForms(), : null,

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
