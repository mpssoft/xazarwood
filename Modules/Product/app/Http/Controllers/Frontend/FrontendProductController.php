<?php

namespace Modules\Product\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Models\Product;

class FrontendProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product::frontend.canva-index');
    }

    public function showProduct(Product $product)
    {
        return view('product::frontend.product',compact('product'));
    }

}
