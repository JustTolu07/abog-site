<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CollectionController extends Controller
{
    public function index()
    {
        $categories = Category::where('active', true)->orderBy('display_order')->get();
        // eager load a sample of products and their cover image
        $categories->load(['products.images']);
        return view('collections.index', compact('categories'));
    }

    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->where('active', true)->firstOrFail();
        $products = $category->products()->where('published', true)->with('images')->orderBy('display_order')->get();
        return view('collections.category', compact('category','products'));
    }
}
