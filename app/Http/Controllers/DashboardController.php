<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $serials = !is_null(request()->page) ? (request()->page - 1) * 20 : 0;
        $products = Product::all();
        $categories = Category::all();
//        dd($serials);
        return view('backend.dashboard', compact('products', 'serials','categories'));
    }
}
