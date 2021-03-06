<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use App\Models\User;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updater_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function zipCodes()
    {
        return $this->hasMany(ZipCode::class);
    }
}
