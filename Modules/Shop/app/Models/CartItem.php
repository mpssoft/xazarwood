<?php

namespace Modules\Shop\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Models\Product;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_type',       // course, lesson, article, product
        'item_id',    // id of the related item
        'qty',
        'code',
        'price',      // optional, could store at time of adding to cart
        'discount',   // optional, store discount applied
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function item()
    {
        return $this->morphTo();
    }
    public function product()
    {
        return $this->hasOne(Product::class,'id','item_id');
    }
}
