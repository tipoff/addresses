<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

/**
 * Class Region
 * @package Tipoff\Addresses\Models
 */
class Region extends BaseModel
{
    use HasPackageFactory;

    /**
     * @var array
     */
    protected $casts = [];

    /**
     * boots model
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($region) {
            if (empty($region->name)) {
                throw new \Exception('A region must have a name.');
            }
            if (empty($region->slug)) {
                throw new \Exception('A region must have a slug.');
            }
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function zipCodes()
    {
        return $this->hasMany(ZipCode::class);
    }
}
