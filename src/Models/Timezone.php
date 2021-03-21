<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Models;

use Tipoff\Addresses\Transformers\TimezoneTransformer;
use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasCreator;
use Tipoff\Support\Traits\HasPackageFactory;
use Tipoff\Support\Traits\HasUpdater;

class Timezone extends BaseModel
{
    use HasPackageFactory;
    use HasCreator;
    use HasUpdater;

    public $timestamps = false;

    public function getTransformer($context = null)
    {
        return new TimezoneTransformer();
    }

    public function markets()
    {
        return $this->belongsToMany(app('market'));
    }

    public function locations()
    {
        return $this->belongsToMany(app('location'));
    }

    public function cities()
    {
        return $this->hasMany(app('city'));
    }

    public function zip()
    {
        return $this->hasMany(app('zip'));
    }
}
