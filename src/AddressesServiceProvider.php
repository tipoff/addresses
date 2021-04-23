<?php

declare(strict_types=1);

namespace Tipoff\Addresses;

use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;
use Livewire\Livewire;
use Tipoff\Addresses\Http\Livewire\DomesticAddressSearchBar;
use Tipoff\Addresses\Http\Livewire\DomesticAddressSearchBarFields;
use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Country;
use Tipoff\Addresses\Models\CountryCallingcode;
use Tipoff\Addresses\Models\DomesticAddress;
use Tipoff\Addresses\Models\Phone;
use Tipoff\Addresses\Models\PhoneArea;
use Tipoff\Addresses\Models\Region;
use Tipoff\Addresses\Models\State;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Models\Zip;
use Tipoff\Addresses\Policies\AddressPolicy;
use Tipoff\Addresses\Policies\CityPolicy;
use Tipoff\Addresses\Policies\CountryCallingcodePolicy;
use Tipoff\Addresses\Policies\CountryPolicy;
use Tipoff\Addresses\Policies\DomesticAddressPolicy;
use Tipoff\Addresses\Policies\PhoneAreaPolicy;
use Tipoff\Addresses\Policies\PhonePolicy;
use Tipoff\Addresses\Policies\RegionPolicy;
use Tipoff\Addresses\Policies\StatePolicy;
use Tipoff\Addresses\Policies\TimezonePolicy;
use Tipoff\Addresses\Policies\ZipPolicy;
use Tipoff\Support\Contracts\Addresses\TimezoneInterface;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class AddressesServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                Address::class => AddressPolicy::class,
                City::class => CityPolicy::class,
                Country::class => CountryPolicy::class,
                CountryCallingcode::class => CountryCallingcodePolicy::class,
                DomesticAddress::class => DomesticAddressPolicy::class,
                Phone::class => PhonePolicy::class,
                PhoneArea::class => PhoneAreaPolicy::class,
                Region::class => RegionPolicy::class,
                State::class => StatePolicy::class,
                Timezone::class => TimezonePolicy::class,
                Zip::class => ZipPolicy::class,
            ])
            ->hasNovaResources([
                \Tipoff\Addresses\Nova\Address::class,
                \Tipoff\Addresses\Nova\City::class,
                \Tipoff\Addresses\Nova\Country::class,
                \Tipoff\Addresses\Nova\CountryCallingcode::class,
                \Tipoff\Addresses\Nova\DomesticAddress::class,
                \Tipoff\Addresses\Nova\Phone::class,
                \Tipoff\Addresses\Nova\PhoneArea::class,
                \Tipoff\Addresses\Nova\Region::class,
                \Tipoff\Addresses\Nova\State::class,
                \Tipoff\Addresses\Nova\Timezone::class,
                \Tipoff\Addresses\Nova\Zip::class,
            ])
            ->hasModelInterfaces([
                TimezoneInterface::class => Timezone::class,
            ])
            ->hasDataMigrations()
            ->name('addresses')
            ->hasConfigFile()
            ->hasViews();
    }

    public function bootingPackage()
    {
        parent::bootingPackage();

        Nova::serving(function () {
            Nova::script('domestic-address', __DIR__.'/../dist/js/field.js');
            Nova::style('domestic-address', __DIR__.'/../dist/css/field.css');
        });

        Livewire::component('addresses::domestic-address-search-bar', DomesticAddressSearchBar::class);
        Livewire::component('addresses::domestic-address-search-bar-fields', DomesticAddressSearchBarFields::class);
    }
}
