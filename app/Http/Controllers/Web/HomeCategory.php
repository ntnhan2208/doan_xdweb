<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use function view;

class HomeCategory extends Controller
{
    public function show($id){
        $category=Category::find($id);
        $categories=Category::all();
        $products= $category->products()->get();
        return view('web.view',compact('products','category','categories'));
    }
}
