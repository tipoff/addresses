<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Support\Providers;

use Tipoff\Addresses\Nova\Customer;
use Tipoff\TestSupport\Providers\BaseNovaPackageServiceProvider;

class NovaPackageServiceProvider extends BaseNovaPackageServiceProvider
{
    public static array $packageResources = [
        Customer::class,
    ];
}