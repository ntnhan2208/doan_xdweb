<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseAdminController
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }



    public function create()
    {
        $categories = Category::all();
        return view('admin.products.add-product', compact('categories'));
    }


    public function store(ProductRequest $request)
    {
        $product = Product::create($input = $request->all());
//        $this->syncRequest($request, $product);
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {

    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit-product', compact('categories','product'));
    }


    public function update(Request $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'detail' => $request->detail,
            'cost' => $request->cost,
            'image' => $request->image
        ]);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

}
