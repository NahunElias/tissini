<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $products = Product::where('category_id', '!=', null)
                            ->get()->unique('category_id')->take(4);

        return view('categories.index', compact('products'));
    }

}
