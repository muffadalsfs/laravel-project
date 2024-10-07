<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class BlogController extends Controller
{
 
    function store(Request $request){
        $name = new Product();
        $name->name = $request->input('name');  // Correct way to get 'name' from request
        $name->price = $request->input('price'); // Correct way to get 'price' from request
        $name->sku = $request->input('sku');  // Correct way to get 'sku' from request
        $name->save();  // Save the product to the database
        return redirect('profile');
    }
    }
    

     function blog(Request $request)
    {
        $products = Product::all(); // Retrieve all products from the database
        return view('profile', ['pro' => $products]); // Pass products as 'pro' to the view
    }
    

// function delete($id){
//     $deleted = Products::destroy($id); // Ensure you use the correct model name
//     if ($deleted) {
//         return redirect('profile')->with('success', 'Product deleted successfully!');
//     } else {
//         return redirect('profile')->with('error', 'Failed to delete product.');
//     }
// }

