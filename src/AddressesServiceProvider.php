<?php

declare(strict_types=1);

namespace Tipoff\Addresses;

use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Policies\TimezonePolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class AddressesServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                Timezone::class => TimezonePolicy::class,
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
