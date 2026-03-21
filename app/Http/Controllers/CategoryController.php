<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);
        $data = $request->only("name");

        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }


    public function show(Category $category)
    {
        $category->load('posts');
        $posts = $category->posts()->where('status', 'published')->latest()->paginate(12);
        $categories = Category::withCount('posts')->get();
        return view('categories.posts', compact('category', 'posts', 'categories'));
    }


    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $data = $request->only('name');
        $category->update($data);


        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }


    public function destroy(Category $category)
    {

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
