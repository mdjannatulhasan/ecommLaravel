<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $serials = !is_null(request()->page) ? (request()->page - 1) * 20 : 0;
        $categories = Category::all();
        return view('backend.category.index',
            compact('categories', 'serials'));
    }
    public function create(){
        return view('backend.category.create');
    }
    public function store(Request $request)
    {
        try {
            Category::create($request->all());
            return redirect()->route('category.index');
        } catch (QueryException $e) {
            return redirect()->back();
        }
    }
    public function edit($id){
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }
    public function update(Request $request, Category $category){
        $category->update($request->all());
        return redirect()->route('category.index');
    }
    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('category.index');
    }
}
