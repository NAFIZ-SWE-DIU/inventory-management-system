<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $products = Product::all();
        return view('products.create', compact('products'));
    }


    public function edit($id)
    {
        // Retrieve the product from the database
        $product = Product::findOrFail($id);

        // Pass the product to the view
        return view('products.edit', ['product' => $product]);
    }


    public function update(Request $request, $id)
    {
        // Validation logic goes here...
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
        ]);

        try {
            // Find the product with the given ID
            $product = Product::findOrFail($id);

            // Update the product with the new data
            $product->update([
                'name' => $request->input('name'),
                'quantity' => $request->input('quantity'),
                'price' => $request->input('price'),
            ]);

            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            // Handle exceptions, such as a model not found exception
            return redirect()->route('products.index')->with('error', 'Error updating product!');
        }
    }


    public function store(Request $request)
    {
        // Validation logic goes here...

        // Create a new product
        $product = new Product();
        $product->name = $request->input('name');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->save();

        // Redirect to the index page
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }


}


