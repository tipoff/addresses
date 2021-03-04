<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class City extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($city) {
            if (empty($city->title)) {
                throw new \Exception('A city must have a name.');
            }
            if (empty($city->slug)) {
                throw new \Exception('A city must have a slug.');
            }
        });
    }

    public function zipCodes()
    {
        return $this->belongsToMany(ZipCode::class)
            ->withPivot('primary')
            ->withTimestamps();
        ;
    }
}
