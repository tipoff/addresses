<?php

namespace Tipoff\Addresses;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tipoff\Addresses\Commands\AddressesCommand;

class AddressesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('addresses')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_addresses_table')
            ->hasCommand(AddressesCommand::class);
    }
}
