<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class CountryCallingcode extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($countryCallingcode) {
            if (empty($countryCallingcode->title)) {
                throw new \Exception('A country calling code must have a code.');
            }
        });
    }

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
