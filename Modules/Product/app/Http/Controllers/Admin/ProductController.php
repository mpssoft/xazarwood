<?php

namespace Modules\Product\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;
use Modules\Blog\Models\Category;
use Modules\Product\Models\Attribute;
use Modules\Product\Models\AttributeValue;
use Modules\Product\Models\Product;
use Modules\Product\Models\ProductImage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();
        $cat = 'all';
        $layout = 'list';
        if($request->has('category') ){
            cookie()->queue('category',$request->category,60*24*30*12);
            $cat = $request->category;
            if($request->category != 'all')
                $query->whereHas('categories', function($q) use ($request) {
                    $q->where('categories.id',$request->category);
                });

        }
        $products = $query->with('images')->latest()->paginate(200);

        if($request->has('layout') || Cookie::get('layout')) {
            cookie()->queue('layout',$request->layout ?? request()->cookie('layout') ,60*24*30);
            $layout = $request->layout ?? request()->cookie('layout');

        }

        return view('product::admin.index', compact('products','cat','layout'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product::admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'product_code' => 'nullable|string',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'video' => 'nullable|string',
            'keywords'    => 'nullable|string',
            'stock'       => 'required|integer|min:0',
            'main_image'  => 'nullable|string',  // file path from file manager
            'images'      => 'nullable|array',
            'gallery_images'    => 'nullable|string',  // multiple file paths
            'categories'  => 'required',
            'status'  => 'in:active,inactive',
            'attributes'  => 'array'
        ]);

        DB::transaction(function () use ($data) {
            $product = Product::create([
                'name'        => $data['name'],
                'price'       => $data['price'],
                'product_code' => $data['product_code'] ?? null,
                'description' => $data['description'] ?? null,
                'content' => $data['content'] ?? null,
                'video' => $data['video'] ?? null,
                'keywords'    => $data['keywords'] ?? null,
                'stock'       => $data['stock'],
                'main_image'  => $data['main_image'] ?? null,
            ]);
            $product->categories()->sync($data['categories']);
            if (!empty($data['gallery_images'])) {
                $images = json_decode($data['gallery_images'], true); // Decode JSON array to PHP array

                if (is_array($images)) {
                    foreach ($images as $img) {
                        $product->images()->create([
                            'image' => $img
                        ]);
                    }
                }
            }

            $attributes = collect($data['attributes']);
            $attributes->each(function($item) use($product){
                if(is_null($item['name']) || is_null($item['value'])) return ;

                $attr = Attribute::firstOrCreate(
                    ['name'=> $item['name']]
                );

                $attr_value = $attr->values()->firstOrCreate(
                    ['value' => $item['value']]

                );
                $product->attributes()->attach($attr->id,['value_id' => $attr_value->id]);

            });
        });

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return view('product::admin.edit', compact('product'));
    }
    public function copy($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return view('product::admin.copy', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::with('images')->findOrFail($id);

        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'product_code' => 'nullable|string',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'video' => 'nullable|string',
            'keywords'    => 'nullable|string',
            'stock'       => 'required|integer|min:0',
            'main_image'  => 'nullable|string',  // file path from file manager
            'images'      => 'nullable|array',
            'gallery_images'    => 'nullable|string',  // multiple file paths
            'categories' => 'required',
            'status'  => 'in:active,inactive',
            'attributes' => 'array'
        ]);

        DB::transaction(function () use ($product, $data) {
            $product->update([
                'name'        => $data['name'],
                'price'       => $data['price'],
                'product_code' => $data['product_code'] ?? null,
                'description' => $data['description'] ?? null,
                'content' => $data['content'] ?? null,
                'video' => $data['video'] ?? null,
                'keywords'    => $data['keywords'] ?? null,
                'stock'       => $data['stock'],
                'status'       => $data['status'],
                'main_image'  => $data['main_image'] ?? null,
            ]);

            // Replace images

            $product->categories()->sync($data['categories']);
            $product->images()->delete();
            $images = json_decode($data['gallery_images'], true); // Decode JSON array to PHP array
            $images = array_filter($images, fn($v) => trim($v) !== '');
            if (!empty($images) ) {
                if (is_array($images)) {
                    foreach ($images as $img) {
                        $product->images()->create([
                            'image' => $img
                        ]);
                    }
                }
            }

            if(isset($data['attributes'])) {
                $product->attributes()->detach();
                $attributes = collect($data['attributes']);
                $attributes->each(function ($item) use ($product) {
                    if (is_null($item['name']) || is_null($item['value'])) return;

                    $attr = Attribute::firstOrCreate(
                        ['name' => $item['name']]
                    );

                    $attr_value = $attr->values()->firstOrCreate(
                        ['value' => $item['value']]

                    );
                    $product->attributes()->attach($attr->id, ['value_id' => $attr_value->id]);

                });
            }

        });

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    public function updateField(Request $request, $id)
    {
        $product = Product::with('images')->findOrFail($id);

        $product->update([
                $request->field => $request->value
            ]);

        return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted!');
    }

    /**
     * Delete a single gallery image.
     */
    public function deleteImage($productId, $imageId)
    {
        $image = ProductImage::where('product_id', $productId)->where('id', $imageId)->firstOrFail();
        $image->delete();

        return back()->with('success', 'Image removed successfully!');
    }
}
