<?php

namespace Modules\Product\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Models\Category;
use Modules\Product\app\Models\ProductAttributeValue;
use Modules\Shop\Models\Discount;

// use Modules\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','price','description','content','video','keywords','stock','main_image','images','status'];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }
    public function discounts()
    {
        return $this->morphToMany(Discount::class, 'discountable');
    }
    public function orderItems()
    {
        return $this->morphMany(OrderItem::class, 'item');
    }
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->using(ProductAttributeValue::class)->withPivot(['value_id']);
    }
}
