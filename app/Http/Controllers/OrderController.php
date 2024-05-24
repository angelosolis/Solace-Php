<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductArchive;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $items = [];
        foreach ($cartItems as $cartItem) {
            $product = Product::find($cartItem->product_id);
            if ($product) {
                // Archive the product details
                ProductArchive::create($product->toArray());

                $items[] = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'quantity' => $cartItem->quantity
                ];
            }
        }

        Order::create([
            'user_id' => $userId,
            'items' => json_encode($items),
            'status' => 'Waiting for payment'
        ]);

        // Clear the cart
        Cart::where('user_id', $userId)->delete();

        return redirect()->route('order.success')->with('success', 'Order placed successfully!');
    }
}
