<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReview;

class ProductReviewController extends Controller
{
    public function store(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Create a new ProductReview instance
        $productReview = new ProductReview();
        
        // Set the product ID
        $productReview->product_id = $id;

        // Set the other fields
        $productReview->full_name = $request->name;
        $productReview->email = $request->email;
        $productReview->comment = $request->review;
        $productReview->rating = $request->rating;

        // Save the product review
        $productReview->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
