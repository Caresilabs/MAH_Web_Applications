<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }
    
    public function show($id)
    {
        $product = Product::with('reviews', 'stores')->find($id);
        return response()->json($product);
    }
    
    public function create(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->description = $request->description;
        
        $product->save();
        
        foreach ($request->get("stores") as $store) {
            $product->stores()->attach($store);
        }
        
        return response()->json(["success" => true]);
    }
}