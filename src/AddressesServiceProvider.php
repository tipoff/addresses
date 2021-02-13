<?php

declare(strict_types=1);

namespace Tipoff\Addresses;

use Illuminate\Support\Facades\Gate;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Policies\AddressPolicy;

class AddressesServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        parent::boot();
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('addresses')
            ->hasConfigFile()
            ->hasViews();
    }

    public function registeringPackage()
    {
        Gate::policy(Address::class, AddressPolicy::class);
    }
}
