<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAtHomepage extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('welcome', compact('products', 'categories'));
    }
    /*public function fetchCat($catId)
    {
        $products = Product::where('category_id', $catId)->get();
        dd($products);
        $categories = Category::all();
        return view('welcome', compact('products', 'categories'));
    }*/
}
