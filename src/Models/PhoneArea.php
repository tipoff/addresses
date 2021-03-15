<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class PhoneArea extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($phoneArea) {
            if (empty($phoneArea->code)) {
                throw new \Exception('A phone area must have a code.');
            }
        });
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'phone_area_code');
    }
}
