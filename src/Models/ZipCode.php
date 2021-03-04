<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class ZipCode extends BaseModel
{
    use HasPackageFactory;

    // These 3 lines of code allow the use of a string as primary key other than ID.
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $keyType = 'string';

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($zip_code) {
            if (empty($zip_code->code)) {
                throw new \Exception('A zip code must have a code.');
            }
            if (empty($zip_code->state_id)) {
                throw new \Exception('A zip code must belong to a state.');
            }
            if (empty($zip_code->city_id)) {
                throw new \Exception('A zip code must belong to a city.');
            }
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(app('states'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(app('city'));
    }
}
