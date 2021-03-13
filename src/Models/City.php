<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Assert\Assert;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

/**
 * @property int id
 * @property string slug
 * @property string title
 * @property string description
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class City extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();

        static::saving(function (City $city) {
            $city->slug = $city->slug ?: Str::slug($city->title);

            Assert::lazy()
                ->that($city->title)->notEmpty('A city must have a name.')
                ->verifyNow();
        });
    }

    public function scopeByTitle(Builder $query, string $title): Builder
    {
        return $query->where('title', '=', trim($title));
    }

    public function zips()
    {
        return $this->belongsToMany(Zip::class)
            ->withPivot('primary')
            ->withTimestamps();
        ;
    }
}
