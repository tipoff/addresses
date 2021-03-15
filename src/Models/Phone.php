<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class Phone extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($phone) {
            if (empty($phone->full_number)) {
                throw new \Exception('A phone must have a full number.');
            }
        });
    }
}
