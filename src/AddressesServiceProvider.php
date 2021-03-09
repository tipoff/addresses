<?php

declare(strict_types=1);

namespace Tipoff\Addresses;

use Tipoff\Addresses\Models\DomesticAddress;
use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Country;
use Tipoff\Addresses\Models\Region;
use Tipoff\Addresses\Models\State;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Models\Zip;
use Tipoff\Addresses\Policies\AddressPolicy;
use Tipoff\Addresses\Policies\CityPolicy;
use Tipoff\Addresses\Policies\CountryPolicy;
use Tipoff\Addresses\Policies\RegionPolicy;
use Tipoff\Addresses\Policies\StatePolicy;
use Tipoff\Addresses\Policies\TimezonePolicy;
use Tipoff\Addresses\Policies\ZipPolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class AddressesServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                DomesticAddress::class => AddressPolicy::class,
                City::class => CityPolicy::class,
                Country::class => CountryPolicy::class,
                Region::class => RegionPolicy::class,
                State::class => StatePolicy::class,
                Timezone::class => TimezonePolicy::class,
                Zip::class => ZipPolicy::class,
            ])
            ->hasNovaResources([
                \Tipoff\Addresses\Nova\Address::class,
                \Tipoff\Addresses\Nova\City::class,
                \Tipoff\Addresses\Nova\Country::class,
                \Tipoff\Addresses\Nova\State::class,
                \Tipoff\Addresses\Nova\Zip::class,
            ])
            ->name('addresses')
            ->hasConfigFile();
    }
}
