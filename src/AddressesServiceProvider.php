<?php

namespace Tipoff\Addresses;

use Illuminate\Support\Str;
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
            ->hasMigration('2020_05_01_100000_create_customers_table')
            ->hasCommand(AddressesCommand::class);
    }

    /**
     * Using packageBooted lifecycle hooks to override the migration file name.
     * We want to keep the old filename for now.
     */
    public function packageBooted()
    {
        foreach ($this->package->migrationFileNames as $migrationFileName) {
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    $this->package->basePath("/../database/migrations/{$migrationFileName}.php.stub") => database_path('migrations/' . Str::finish($migrationFileName, '.php')),
                ], "{$this->package->name}-migrations");
            }
        }
    }
}
