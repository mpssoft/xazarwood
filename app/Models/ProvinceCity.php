<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvinceCity extends Model
{
    public function addressesAsProvince()
    {
        return $this->hasMany(UserAddress::class, 'province_id');
    }

    public function addressesAsCity()
    {
        return $this->hasMany(UserAddress::class, 'city_id');
    }
}
