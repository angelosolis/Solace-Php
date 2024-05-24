<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    // Define the relationship with the Product model
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Calculate the total price of items in the cart
    public function getTotalPrice()
    {
        $totalPrice = 0;

        foreach ($this->items as $item) {
            $totalPrice += $item->product->price * $item->quantity;
        }

        return $totalPrice;
    }

    // Check if a specific product is already in the cart
    public function containsProduct($productId)
    {
        return $this->items()->where('product_id', $productId)->exists();
    }

    // Increment the quantity of a product in the cart
    public function incrementQuantity($productId)
    {
        $item = $this->items()->where('product_id', $productId)->first();
        if ($item) {
            $item->increment('quantity');
        }
    }

    // Decrement the quantity of a product in the cart
    public function decrementQuantity($productId)
    {
        $item = $this->items()->where('product_id', $productId)->first();
        if ($item && $item->quantity > 1) {
            $item->decrement('quantity');
        }
    }


}
