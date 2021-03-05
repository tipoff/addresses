<?php

declare(strict_types=1);

use Tipoff\Authorization\Permissions\BasePermissionsMigration;

class AddAddressesPermissions extends BasePermissionsMigration
{
    public function up()
    {
        $permissions = [
            'view customers',
            'create customers',
            'update customers',
            'view timezones',
            'create timezones',
            'update timezones',
        ];

        $this->createPermissions($permissions);
    }
}
