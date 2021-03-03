<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class Country extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($country) {
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany(app('states'));
    }
}
