<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();

        return $products;
        
    }

    public function updateProduct()
    {
        $product = Product::find(1); // Ganti dengan ID produk yang ingin diupdate
        $product->name = 'Updated Product Name';
        $product->price = 15000;
        $product->save();
    }

    public function lazyLoading()
    {
        $products = Product::all(); 

        return $products;
    }

    public function eagerLoading()
    {
        $products = Product::with(['category', 'supplier'])->get();

        return $products;
    }
    
}
