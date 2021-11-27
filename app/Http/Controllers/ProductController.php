<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $serials = !is_null(request()->page) ? (request()->page - 1) * 20 : 0;
        $products = Product::all();
        return view('backend.product.index',
            compact('products', 'serials'));
    }
    public function create() {
        $categories = Category::pluck('title','id')->toArray();
        return view('backend.product.create', compact('categories'));
    }
    public function store(Request $request){

        $data = $request->all();
//        dd($data);
        if(array_key_exists('image', $request->all())){
            $imagePath = request('image')->store('uploads/products','public');
            $products = Product::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'category_id' => $data['category_id'],
                'prize' => $data['prize'],
                'image' => $imagePath,
            ]);
        }else{
            $products = Product::create($request->all());
        }
        return redirect()->route('product.index');
    }
    public function show($id){
        $products = Product::findOrFail($id);
        $categories = Category::pluck('title','id');
        return
            view('backend.product.show',compact('products','categories'));
    }
    public function edit($id){
        $product = Product::findOrfail($id);
        $categories = Category::pluck('title','id');
        return
            view('backend.product.edit',compact('product','categories'));
    }
    public function update(Request $request, Product $product){
        $array = $request->all();
        if (array_key_exists('image',$array)) {
            $imagePath = request('image')->store('uploads/products', 'public');
            $product->update([
                'title' => $product['title'],
                'description' => $product['description'],
                'category_id' => $product['category_id'],
                'prize' => $product['prize'],
                'image' => $imagePath,
            ]);
        }
        else{
            $product->update($request->all());
        }

        return redirect()->route('product.index');
    }
    public function destroy($id){
        Product::findOrfail($id)->delete();
        return redirect()->route('product.index');
    }

}
