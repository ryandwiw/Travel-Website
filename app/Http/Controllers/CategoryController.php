<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Support\Str;
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
            'name' => 'required|unique:categories|max:255',
        ]);

        $slug = Str::slug($request->name);

        Category::create([
            'name' => $request->name,
            'slug' => $slug,
        ]);

        return redirect()->route('categories.index')
                         ->with('success', 'Category created successfully');
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        // $artikels = $category->articles;
        $artikels = $category->articles()->paginate(10);
        return view('categories.show', compact('category', 'artikels'));
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $category = Category::where('slug', $slug)->firstOrFail();

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('categories.index')
                         ->with('success', 'Category updated successfully');
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', 'Category deleted successfully');
    }
}
