<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $param=$request->all();
        $products = Product::filter($param)->get();
        $categories=Category::all();
        return view('web.homepage', compact('products','categories'));
    }
}
