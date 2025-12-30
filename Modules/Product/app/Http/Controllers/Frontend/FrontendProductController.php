<?php

namespace Modules\Product\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
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

        $sort = $request->sort ?? 'newest'; // default sort

        $query = Product::query();
        if(is_array($request->cat)){
            $query->whereHas('categories', function($q) use ($request) {
                $q->whereIn('name',$request->cat);
            });
        }elseif ($request->cat != 'all') {
            $query->whereHas('categories', function($q) use ($request) {
                $q->where('name', 'like', "%{$request->cat}%");
            });
        }

        switch ($sort) {
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;

            default: // newest
                $query->orderBy('created_at', 'desc');
        }

        $products = $query->get();


        return view('product::frontend.bing-index',compact('products'));
    }
public function sortIndex( Request $request)
    {

        $sort = $request->sort ?? 'newest'; // default sort

        $query = Product::query();

        if(is_array($request->cat)){

            $query->whereHas('categories', function($q) use ($request) {
                $q->whereIn('categories.id',$request->cat);
            });
        }elseif ($request->cat != 'all') {
            $query->whereHas('categories', function($q) use ($request) {
                $q->where('name', 'like', "%{$request->cat}%");
            });
        }

        switch ($sort) {
            case 'price-low':
                $query->orderBy('price', 'asc');
                break;
            case 'price-high':
                $query->orderBy('price', 'desc');
                break;

            default: // newest
                $query->orderBy('created_at', 'desc');
        }

        $products = $query->get();


        return view('product::frontend.sort-index',compact('products'));
    }

    public function showProduct(Product $product)
    {
        $this->seo()
            ->setTitle($product->name)
            ->setDescription($product->description)
        ;
        SEOMeta::addMeta('product_id', $product->id, 'name');
        SEOMeta::addMeta('product_name', $product->name .' - '.$product->product_code, 'name');
        SEOMeta::addMeta('product_price', $product->price, 'name');
        SEOMeta::addMeta('availability', ($product->stock && $product->status == 'active') ? 'instock' : 'outofstock', 'name');
        SEOMeta::addMeta('guarantee', $product->guarantee, 'name');
        SEOMeta::addMeta('keywords', $product->keywords, 'name');

        // Open Graph for social sharing
        OpenGraph::setTitle($product->name)
            ->setDescription($product->description)
            ->addImage(asset($product->main_image)); // <-- Here you add the product image

        foreach ($product->images as $image)
        {
            OpenGraph::addImage(asset($image->image));
        }
        $relatedProducts = Product::where("id","!=",$product->id)->whereHas('categories',function($query) use($product){
            $query->whereIn('name',$product->categories()->pluck('name')->toArray());
        })->latest()->take(4)->get();

        return view('product::frontend.product',compact('product','relatedProducts'));
    }

}
