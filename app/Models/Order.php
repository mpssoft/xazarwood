<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\LessonPlan\Models\LessonPlan;

class Order extends Model
{
    protected $fillable = ['user_id','user_address_id', 'status','price','shipping_price'];

    public function user() {
        return $this->belongsTo(User::class);
    }


    public function payments() {
        return $this->hasMany(Payment::class);
    }


    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function address()
    {
        return $this->belongsTo(UserAddress::class,'user_address_id');
    }
}
