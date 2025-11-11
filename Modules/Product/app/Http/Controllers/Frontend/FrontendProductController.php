<?php

namespace Modules\Product\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Models\Category;
use Modules\Product\Models\Product;

class FrontendProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        if($request->cat != 'all')
            $products = Product::whereHas('categories',function($query) use($request){
                $query->where('name','like',"%{$request->cat}%");
            })->get();
        else
            $products  = Product::all();
        return view('product::Frontend.canva-index',compact('products'));
    }

    public function showProduct(Product $product)
    {
        return view('product::Frontend.product',compact('product'));
    }

}
