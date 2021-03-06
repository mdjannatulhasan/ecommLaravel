<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $serials = !is_null(request()->page) ? (request()->page - 1) * 20 : 0;
        $products = Product::all();
        $categories = Category::all();
        return view('backend.dashboard', compact('products', 'categories', 'serials'));
    }
}
