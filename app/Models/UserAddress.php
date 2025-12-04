<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable= ['province_id','city_id','postal_code','address'];

    public function user()
    {
        return $this->belongsTo(User::class)->with(['province','city']);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function province()
    {
        return $this->belongsTo(ProvinceCity::class,'province_id');
    }
    public function city()
    {
        return $this->belongsTo(ProvinceCity::class,'city_id');
    }

}
