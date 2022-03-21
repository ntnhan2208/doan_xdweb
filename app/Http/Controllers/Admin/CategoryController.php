<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseAdminController
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add-category');
    }


    public function store(CategoryRequest $request)
    {
        $category = Category::create($input = $request->all());
        return redirect()->route('categories.index');

    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit-category', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name
        ]);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $products = $category->products()->update([
            'category_id'=>null,
        ]);
        $category->delete();
        return redirect()->route('categories.index');

    }
}
