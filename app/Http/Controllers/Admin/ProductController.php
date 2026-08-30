<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::with('category', 'images')->orderBy('display_order')->get();
        $categoriesCount = Category::count();

        return view('admin.products.index', compact('products', 'categoriesCount'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = Category::all();
        $product = new Product();

        return view('admin.products.form', compact('categories', 'product'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'materials' => 'nullable|string',
            'finish' => 'nullable|string',
            'dimensions' => 'nullable|string',
            'colour' => 'nullable|string',
            'usage' => 'nullable|string',
            'customisation' => 'nullable|string',
            'lead_time' => 'nullable|string',
            'cover_image_path' => 'nullable|string',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['published'] = $request->has('published');
        $validated['featured'] = $request->has('featured');

        $product = Product::create($validated);

        if ($request->filled('cover_image_path')) {
            ProductImage::create([
                'product_id' => $product->id,
                'path' => $request->input('cover_image_path'),
                'sort_order' => 1,
                'is_cover' => true,
            ]);
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully in SQLite!');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $product->load('images');

        return view('admin.products.form', compact('categories', 'product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'materials' => 'nullable|string',
            'finish' => 'nullable|string',
            'dimensions' => 'nullable|string',
            'colour' => 'nullable|string',
            'usage' => 'nullable|string',
            'customisation' => 'nullable|string',
            'lead_time' => 'nullable|string',
            'cover_image_path' => 'nullable|string',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['published'] = $request->has('published');
        $validated['featured'] = $request->has('featured');

        $product->update($validated);

        if ($request->filled('cover_image_path')) {
            $product->images()->delete();
            ProductImage::create([
                'product_id' => $product->id,
                'path' => $request->input('cover_image_path'),
                'sort_order' => 1,
                'is_cover' => true,
            ]);
        }

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully in SQLite!');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        $product->images()->delete();
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted from SQLite database.');
    }
}
