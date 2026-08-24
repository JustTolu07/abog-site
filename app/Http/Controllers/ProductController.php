<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function show($category, $product)
    {
        $prod = Product::where('slug', $product)->with('images','category')->firstOrFail();
        return view('products.show', ['product' => $prod]);
    }
}
