<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Nova;

use Dniccum\PhoneNumber\PhoneNumber;
use Illuminate\Http\Request;
use Inspheric\Fields\Email;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Tipoff\Support\Nova\BaseResource;

class Customer extends BaseResource
{
    public static $model = \Tipoff\Addresses\Models\Customer::class;

    public function title()
    {
        return "{$this->user->name} {$this->user->name_last}";
    }

    public function subtitle()
    {
        return "ID: {$this->id} - {$this->user->email}";
    }

    public static $search = [
        'id',
        'u.name',
        'u.name_last',
        'u.email',
    ];

    public static $group = 'Access';

    public static function indexQuery(NovaRequest $request, $query)
    {
        $query->select(['customers.*', 'u.name', 'u.name_last', 'u.email']);
        $query->join('users as u', 'customers.user_id', '=', 'u.id');

        return $query;
    }

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
            nova('user') ? BelongsTo::make('User', 'user', nova('user'))->sortable() : null,
            Text::make('Company')->sortable(),
            Text::make('Address')->sortable(),
            Text::make('City')->sortable(),
            Text::make('State')->sortable(),
            Number::make('Zip')->sortable(),
            Text::make('Timezone', 'timezone')->sortable(),
            Text::make('Source')->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            nova('user') ? BelongsTo::make('User', 'user', nova('user'))->searchable()->withSubtitles()->withoutTrashed() : null,
            Text::make('Company'),
            PhoneNumber::make('Phone', 'phone_number')->format('###-###-####')->disableValidation()->useMaskPlaceholder()->linkOnDetail()->hideWhenUpdating(),
            Email::make('Email', 'user.email')->clickable()->hideWhenUpdating(),
            Text::make('Address'),
            Text::make('City'),
            Text::make('State'),
            Number::make('Zip'),
            Text::make('Timezone', 'timezone'),
            Text::make('Source'),
            nova('invoice') ? HasMany::make('Invoices', 'invoices', nova('invoice')) : null,
            nova('order') ? HasMany::make('Orders', 'orders', nova('order')) : null,
            nova('payment') ? HasMany::make('Payments', 'payments', nova('payment')) : null,
            nova('voucher') ? HasMany::make('Vouchers', 'vouchers', nova('voucher')) : null,
            nova('note') ? MorphMany::make('Notes', 'notes', nova('note')) : null,
            new Panel('Data Fields', $this->dataFields()),
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
