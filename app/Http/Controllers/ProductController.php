<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(4)->get();
        $randomText = Arr::random(['Something Spicy', 'Something Hot', 'Something Delicious']);
        $randomProduct = Product::inRandomOrder()->first();
        return view('index')->with('products', $products)->with('randomProduct',$randomProduct)->with('randomText',$randomText);
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('product-detail')->with('product', $product);
    }

    public function show($id)
{
    // Fetch the product with its reviews
    $product = Product::with('reviews')->findOrFail($id);
    
    // Count the reviews
    $reviewCount = $product->reviews->count();
    
    // Calculate the average rating
    $averageRating = $product->reviews->avg('rating');

    return view('product-detail')->with('product', $product)->with('reviewCount', $reviewCount)->with('averageRating', $averageRating);
}

    public function products()
    {
        $products = Product::all();
        return view('products')->with('products',$products);
    }
}
