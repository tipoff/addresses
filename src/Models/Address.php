<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasCreator;
use Tipoff\Support\Traits\HasPackageFactory;
use Tipoff\Support\Traits\HasUpdater;

class Address extends BaseModel
{
    use HasCreator;
    use HasPackageFactory;
    use HasUpdater;
    
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($address) {
            if (empty($address->domestic_address_id)) {
                throw new \Exception('An address must have a US domestic postal address.');
            }
        });
    }

    public function domesticAddress()
    {
        return $this->belongsTo(DomesticAddress::class);
    }
}
