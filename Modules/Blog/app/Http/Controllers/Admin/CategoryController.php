<?php

namespace Modules\Blog\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Modules\Blog\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Show all categories
    public function index()
    {
        $categories = Category::paginate(20);
        return view('blog::admin.categories.index', compact('categories'));
    }

    // Show form to create category
    public function create()
    {
        return view('blog::admin.categories.create');
    }

    // Save new category
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'english' => 'required|string|max:255',
            'category_table' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }


    // Show form to edit category
    public function edit(Category $category)
    {
        return view('blog::admin.categories.edit', compact('category'));
    }

    // Update category
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'english' => 'required|string|max:255',
            'category_code' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    // Delete category
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
