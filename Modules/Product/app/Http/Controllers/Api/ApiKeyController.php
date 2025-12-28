<?php

namespace Modules\Product\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Models\Product;

class ApiKeyController extends Controller
{
   public function listProducts(Request $request)
   {
       $page = max((int) $request->get('page', 1), 1);
       $perPage = max((int) $request->get('items_per_page', 10), 1);

       $query = Product::with('categories'); // assuming Product belongsTo Category

       $totalItems = $query->count();

       $pagesCount = ceil($totalItems / $perPage);

       $products = $query->skip(($page - 1) * $perPage)
           ->take($perPage)
           ->get()
           ->map(function ($product) {
               $productDiscount = $product->discounts
                   ->where('start_at', '<', now())
                   ->where('end_at', '>', now())
                   ->where('is_active', 1)
                   ->first();

               // Initialize category discount
               $categoryDiscount = null;
                $finalPrice = $product->price;

               // If no product discount, check categories
               if (!$productDiscount && $product->categories && $product->categories->count() > 0) {
                   foreach ($product->categories as $category) {
                       $activeCatDiscount = $category->discounts
                           ->where('start_at', '<', now())
                           ->where('end_at', '>', now())
                           ->where('is_active', 1)
                           ->first();

                       if ($activeCatDiscount) {
                           $categoryDiscount = $activeCatDiscount;
                           break; // stop at first found
                       }
                   }
               }

               // Determine which discount to use
               $activeDiscount = $productDiscount ?? $categoryDiscount;

               // Calculate discount amount if any
               if ($activeDiscount) {
                   $disValue = $activeDiscount->value;
                   $disType = $activeDiscount->type;

                   if ($disType == 'percent') {
                       $dis = $product->price * ($disValue / 100);
                   } else {
                       $dis = $disValue; // fixed amount
                   }

                   $finalPrice = max(0, $product->price - $dis);
               }

               if(in_array('رنگ',$product->attributes->pluck('name')->toArray())) {
                   $key = array_search('رنگ', $product->attributes->pluck('name')->toArray());
                   $color = $product->attributes()->get()[$key]->pivot->value->value;
               }


               return [
                   'id' => (string) $product->id,
                   'title' => $product->name,
                   'price' => (int) $finalPrice,
                   'old_price' => (int) $product->price,
                   'category' => !is_null($product->categories()->get()) ? $product->categories()->get()[0]->name : null,
                   'image' => asset($product->main_image),
                   'color' => $color ?? null,
                   'guarantee' => $product->guarantee ?? null,
                   'is_available' =>  ($product->stock && $product->status=='active'),
                   'url' => route('show.product', [$product->id,$product->name]),
               ];
           });

       return response()->json([
           'success' => true,
           'products' => $products,
           'total_items' => $totalItems,
           'pages_count' => $pagesCount,
           'item_per_page' => $perPage,
           'page_num' => $page,
       ]);
   }

}
