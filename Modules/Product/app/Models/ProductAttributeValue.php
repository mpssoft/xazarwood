<?php

namespace Modules\Product\app\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Modules\Product\Models\Attribute;
use Modules\Product\Models\AttributeValue;
use Modules\Product\Models\Product;

class ProductAttributeValue extends Pivot
{

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function attribute()
    {
        return $this->belongsTo(Attribute::class,'attribute_id','id');
    }
    public function value()
    {
        return $this->belongsTo(AttributeValue::class,'value_id','id');
    }
}
