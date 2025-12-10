<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        $categories = Category::all();
        $related_products = null;

        $query = Product::withCount('favoriteBy');

        return view('products.index', compact('categories'));
    }

    public function show($id) {

    }

    public function create() {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:40|string',
        ]);
    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $request->validate([
            'name' => 'required|max:40|string',
        ]);
    }

    public function destroy($id) {
        $product = Product::find($id);
    }
}
