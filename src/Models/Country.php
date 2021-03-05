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
            if (empty($country->title)) {
                throw new \Exception('A country must have a title.');
            }
            if (empty($country->abbreviation)) {
                throw new \Exception('A country must have an abbreviation.');
            }
            if (empty($country->slug)) {
                throw new \Exception('A country must have a slug.');
            }
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
