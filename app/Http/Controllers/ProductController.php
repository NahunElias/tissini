<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('status', 2)->latest('id')->paginate(8);

        return view('products.index', compact('products'));
    }

    public function show(Product $product){
        $similares = Product::where('category_id', $product->category_id)
                                ->where('status', 2)
                                ->where('id', '!=', $product->id)
                                ->latest('id')
                                ->take(4)
                                ->get();

        return view('products.show', compact('product', 'similares'));
    }

    public function category(Category $category){
        $products = Product::where('category_id', $category->id)
                                ->where('status', 2)
                                ->latest('id')
                                ->paginate(6);
        return view('products.category', compact('products', 'category'));
    }
}
