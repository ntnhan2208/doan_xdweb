<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\BaseAdminController;
use App\Models\Category;
use function view;

class HomeCategory extends BaseAdminController
{
    public function show($id){
        $category=Category::find($id);
        $categories=Category::all();
        $products= $category->products()->get();
        return view('web.view',compact('products','category','categories'));
    }
}
