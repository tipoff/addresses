<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class Address extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($address) {
            if (empty($address->address_line_1)) {
                throw new \Exception('An address must have a street.');
            }
            if (empty($address->city_id)) {
                throw new \Exception('An address must have a city.');
            }
            if (empty($address->zip_code_id)) {
                throw new \Exception('An address must have a zip code.');
            }
        });
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function zip_code()
    {
        return $this->belongsTo(ZipCode::class);
    }
}
