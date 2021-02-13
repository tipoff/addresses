<?php

declare(strict_types=1);

namespace Tipoff\Addresses;

use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class AddressesServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('addresses')
            ->hasConfigFile();
    }
}
