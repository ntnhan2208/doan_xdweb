<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use DB;

class HomeController extends BaseFEController
{
    public function index(){
        $products=Product::all();
        $categories=Category::all();
        return view('web.homepage',compact('products','categories'));
    }

}
