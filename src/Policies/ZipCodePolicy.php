<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Tipoff\Addresses\Models\ZipCode;
use Tipoff\Support\Contracts\Models\UserInterface;

class ZipCodePolicy
{
    use HandlesAuthorization;

    public function viewAny(UserInterface $user): bool
    {
        return $user->hasPermissionTo('view zipcodes');
    }

    public function view(UserInterface $user, ZipCode $zipCode): bool
    {
        return $user->hasPermissionTo('view zipcodes');
    }

    public function create(UserInterface $user): bool
    {
        return $user->hasPermissionTo('create zipcodes');
    }

    public function update(UserInterface $user, ZipCode $zipCode): bool
    {
        return $user->hasPermissionTo('update zipcodes');
    }

    public function delete(UserInterface $user, ZipCode $zipCode): bool
    {
        return false;
    }

    public function restore(UserInterface $user, ZipCode $zipCode): bool
    {
        return false;
    }

    public function forceDelete(UserInterface $user, ZipCode $zipCode): bool
    {
        return false;
    }
}
