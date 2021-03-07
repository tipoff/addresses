<?php

declare(strict_types=1);

namespace Tipoff\Addresses;

use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Country;
use Tipoff\Addresses\Models\Region;
use Tipoff\Addresses\Models\State;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Models\ZipCode;
use Tipoff\Addresses\Policies\AddressPolicy;
use Tipoff\Addresses\Policies\CityPolicy;
use Tipoff\Addresses\Policies\CountryPolicy;
use Tipoff\Addresses\Policies\RegionPolicy;
use Tipoff\Addresses\Policies\StatePolicy;
use Tipoff\Addresses\Policies\TimezonePolicy;
use Tipoff\Addresses\Policies\ZipCodePolicy;
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
                Region::class => RegionPolicy::class,
                State::class => StatePolicy::class,
                Timezone::class => TimezonePolicy::class,
                ZipCode::class => ZipCodePolicy::class,
            ])
            ->hasNovaResources([
                \Tipoff\Addresses\Nova\Address::class,
                \Tipoff\Addresses\Nova\City::class,
                \Tipoff\Addresses\Nova\Country::class,
                \Tipoff\Addresses\Nova\State::class,
                \Tipoff\Addresses\Nova\ZipCode::class,
            ])
            ->name('addresses')
            ->hasConfigFile();
    }
}
