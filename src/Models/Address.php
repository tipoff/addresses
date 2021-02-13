<?php

namespace Tipoff\Addresses\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class Address extends BaseModel
{
    use HasPackageFactory;

    protected $guarded = ['id'];
    protected $casts = [];
}
