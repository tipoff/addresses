<?php

namespace Tipoff\Addresses;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tipoff\Addresses\Addresses
 */
class AddressesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'addresses';
    }
}
