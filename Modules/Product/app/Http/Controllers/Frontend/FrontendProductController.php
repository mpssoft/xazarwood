<?php

namespace Modules\Product\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
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
                $q->whereIn('name',$request->cat)
                ->orWhereIn('english',$request->cat);
            });
        }elseif ($request->cat != 'all') {
            $query->whereHas('categories', function($q) use ($request) {
                $q->where('name', 'like', "%{$request->q}%")
                    ->orWhere('english','like',"%{$request->cat}%");
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
        if($request->stock == 'true'){
            $query->where('status','active')
                    ->where('stock','>',0);
        }
        $products = $query->get();


        return view('product::frontend.sort-index',compact('products'));
    }

    public function showProduct(Product $product)
    {
        $this->seo()
            ->setTitle($product->name . ' '. $product->product_code)
            ->setDescription($product->description)
            ->jsonLd()->setType("Product")
            ;
        SEOMeta::addMeta('product_id', $product->id, 'name');
        SEOMeta::addMeta('product_name', $product->name .' '.$product->product_code, 'name');
        SEOMeta::addMeta('product_price', $product->price, 'name');
        SEOMeta::addMeta('availability', ($product->stock && $product->status == 'active') ? 'instock' : 'outofstock', 'name');
        SEOMeta::addMeta('guarantee', $product->guarantee, 'name');
        SEOMeta::addMeta('keywords', $product->keywords, 'name');

        // Open Graph for social sharing
        OpenGraph::setTitle($product->name)
            ->setDescription($product->description)
            ->addImage(asset($product->main_image)); // <-- Here you add the product image


        // Structured data (JSON-LD)
        $this->seo()->jsonLd()->setType('Product');

        $this->seo()->jsonLdMulti()->addValues([
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => $product->name .' '. $product->product_code,
            'description' => $product->description .' کد '. $product->product_code,
            'image' => [asset($product->main_image)],
            'sku' => $product->product_code,
            'offers' => [
                '@type' => 'Offer',
                'url' => route('show.product', ['product'=>$product->id,'name'=>$product->name.' '.$product->product_code]),
                'priceCurrency' => 'IRR', // or USD/EUR etc.
                'price' => $product->price*10,
                'availability' => ($product->stock && $product->status == 'active') ? 'https://schema.org/InStock':'https://schema.org/OutOfStock',
            ],
        ]);



        foreach ($product->images as $image)
        {
            OpenGraph::addImage(asset(str_replace(['small','500'],['big','1500'], $image->image)));
        }
        $relatedProducts = Product::where("id","!=",$product->id)->whereHas('categories',function($query) use($product){
            $query->whereIn('name',$product->categories()->pluck('name')->toArray());
        })->latest()->take(4)->get();

        return view('product::frontend.product',compact('product','relatedProducts'));
    }

}
