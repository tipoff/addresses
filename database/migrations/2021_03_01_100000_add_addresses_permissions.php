<?php

declare(strict_types=1);

use Tipoff\Authorization\Permissions\BasePermissionsMigration;

class AddAddressesPermissions extends BasePermissionsMigration
{
    public function up()
    {
        $permissions = [
            'view addresses',
            'create addresses',
            'update addresses',
            'view cities',
            'create cities',
            'update cities',
            'view countries',
            'create countries',
            'update countries',
            'view regions',
            'create regions',
            'update regions',
            'view states',
            'create states',
            'update states',
            'view timezones',
            'create timezones',
            'update timezones',
            'view zip codes',
            'create zip codes',
            'update zip codes',
        ];

        $this->createPermissions($permissions);
    }
}
