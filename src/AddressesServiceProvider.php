<?php

declare(strict_types=1);

namespace Tipoff\Addresses;

use Tipoff\Addresses\Models\Addresses;
use Tipoff\Addresses\Policies\AddressesPolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class AddressesServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                Addresses::class => AddressesPolicy::class,
            ])
            ->name('addresses')
            ->hasConfigFile();
    }
}
