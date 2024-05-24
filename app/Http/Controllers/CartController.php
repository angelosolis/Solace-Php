<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1|max:99'
        ]);

        Cart::updateOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $request->product_id],
            ['quantity' => $request->quantity]
        );

        return redirect('/cart')->back()->with('success', 'Product added to cart successfully!');
    }
    public function showCart()
    {
        // Retrieve the cart items associated with the logged-in user
        $userCart = auth()->user()->cart;

        // Pass the cart items to the view
        return view('cart', compact('userCart'));
    }
}
