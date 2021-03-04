<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Addresses\Models\Country;
use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class State extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($state) {
            if (empty($state->title)) {
                throw new \Exception('A state must have a title.');
            }
            if (empty($state->abbreviation)) {
                throw new \Exception('A state must have an abbreviation.');
            }
            if (empty($state->slug)) {
                throw new \Exception('A state must have a slug.');
            }
            if (empty($state->country_id)) {
                throw new \Exception('A state must belong to a country.');
            }
        });
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
