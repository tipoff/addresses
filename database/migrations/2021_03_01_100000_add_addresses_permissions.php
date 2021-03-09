<?php

declare(strict_types=1);

use Tipoff\Authorization\Permissions\BasePermissionsMigration;

class AddAddressesPermissions extends BasePermissionsMigration
{
    public function up()
    {
        $permissions = [
            'view addresses' => ['Owner', 'Staff'],
            'create addresses' => ['Owner'],
            'update addresses' => ['Owner'],
            'view cities' => ['Owner', 'Staff'],
            'create cities' => ['Owner'],
            'update cities' => ['Owner'],
            'view countries' => ['Owner', 'Staff'],
            'create countries' => ['Owner'],
            'update countries' => ['Owner'],
            'view regions' => ['Owner', 'Staff'],
            'create regions' => ['Owner'],
            'update regions' => ['Owner'],
            'view states' => ['Owner', 'Staff'],
            'create states' => ['Owner'],
            'update states' => ['Owner'],
            'view timezones' => ['Owner', 'Staff'],
            'create timezones' => ['Owner'],
            'update timezones' => ['Owner'],
            'view zip codes' => ['Owner', 'Staff'],
            'create zip codes' => ['Owner'],
            'update zip codes' => ['Owner'],
        ];

        $this->createPermissions($permissions);
    }
}
