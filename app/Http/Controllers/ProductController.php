<?php
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Models\Product as ProductModel;

class ProductController extends Controller
{
    

    // Store a newly created product in the database
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'product_id' => 'required|numeric',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url',
        ]);

        // Create a new product using the validated data
        $product = new Product($validatedData);

        // Save the product to the database
        $product->save();

        // Redirect back to the index page with a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }


    
}
