<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Addresses\Transformers\CountryTransformer;
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

    public static function fromAbbreviation(string $abbreviation): self
    {
        /** @var Country $result */
        $result = static::query()->where('abbreviation', '=', $abbreviation)->firstOrFail();

        return $result;
    }

    public function getTransformer($context = null)
    {
        return new CountryTransformer();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
