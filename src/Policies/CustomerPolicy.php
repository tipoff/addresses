<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Tipoff\Addresses\Models\Customer;
use Tipoff\Support\Contracts\Models\UserInterface;

class CustomerPolicy
{
    use HandlesAuthorization;

    public function viewAny(UserInterface $user): bool
    {
        return $user->hasPermissionTo('view customers') ? true : false;
    }

    public function view(UserInterface $user, Customer $customer): bool
    {
        return $user->hasPermissionTo('view customers') ? true : false;
    }

    public function create(UserInterface $user): bool
    {
        return $user->hasPermissionTo('create customers') ? true : false;
    }

    public function update(UserInterface $user, Customer $customer): bool
    {
        return $user->hasPermissionTo('update customers') ? true : false;
    }

    public function delete(UserInterface $user, Customer $customer): bool
    {
        return false;
    }

    public function restore(UserInterface $user, Customer $customer): bool
    {
        return false;
    }

    public function forceDelete(UserInterface $user, Customer $customer): bool
    {
        return false;
    }
}
