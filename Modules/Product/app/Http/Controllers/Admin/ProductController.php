<?php

namespace Modules\Product\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Modules\Product\Models\Product;
use Modules\Product\Models\ProductImage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('images')->latest()->get();
        return view('product::admin.index', compact('products'));
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
            'description' => 'nullable|string',
            'keywords'    => 'nullable|string',
            'stock'       => 'required|integer|min:0',
            'main_image'  => 'nullable|string',  // file path from file manager
            'images'      => 'nullable|array',
            'images.*'    => 'nullable|string',  // multiple file paths
        ]);

        DB::transaction(function () use ($data) {
            $product = Product::create([
                'name'        => $data['name'],
                'price'       => $data['price'],
                'description' => $data['description'] ?? null,
                'keywords'    => $data['keywords'] ?? null,
                'stock'       => $data['stock'],
                'main_image'  => $data['main_image'] ?? null,
            ]);

            if (!empty($data['images'])) {
                foreach ($data['images'] as $img) {
                    $product->images()->create(['image' => $img]);
                }
            }
        });

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return view('product::edit', compact('product'));
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
            'description' => 'nullable|string',
            'keywords'    => 'nullable|string',
            'stock'       => 'required|integer|min:0',
            'main_image'  => 'nullable|string',
            'images'      => 'nullable|array',
            'images.*'    => 'nullable|string',
        ]);

        DB::transaction(function () use ($product, $data) {
            $product->update([
                'name'        => $data['name'],
                'price'       => $data['price'],
                'description' => $data['description'] ?? null,
                'keywords'    => $data['keywords'] ?? null,
                'stock'       => $data['stock'],
                'main_image'  => $data['main_image'] ?? null,
            ]);

            // Replace images
            $product->images()->delete();
            if (!empty($data['images'])) {
                foreach ($data['images'] as $img) {
                    $product->images()->create(['image' => $img]);
                }
            }
        });

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted!');
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
