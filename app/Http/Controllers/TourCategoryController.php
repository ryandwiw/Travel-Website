<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use App\Models\TourArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourCategoryController extends Controller
{
    public function index()
    {
        $tourCategories = TourCategory::paginate(10);
        return view('tourcategory.index', compact('tourCategories'));
    }

    public function create()
    {
        $tourArticles = TourArticle::all();
        return view('tourcategory.create', compact('tourArticles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'foto_tour' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'activity' => 'required',
            'start' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'tour_article_id' => 'exists:tour_articles,id'
        ]);

        $slug = Str::slug($request->nama_kategori);

        $tourCategory = new TourCategory();
        $tourCategory->nama_kategori = $request->nama_kategori;
        $tourCategory->slug = $slug;
        $tourCategory->activity = $request->activity;
        $tourCategory->start = $request->start;
        $tourCategory->duration = $request->duration;
        $tourCategory->price = $request->price;
        $tourCategory->tour_article_id = $request->tour_article_id;

        $fieldName = "foto_tour";
        if ($request->hasFile($fieldName)) {
            $gambar = $request->file($fieldName);
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('tour_category'), $gambarName);
            $tourCategory->$fieldName = 'tour_category/' . $gambarName;
        }

        $tourCategory->save();

        return redirect()->route('tourcategories.index')->with('success', 'Kategori Tour berhasil ditambahkan.');
    }

    public function show($slug)
    {
        $tourCategory = TourCategory::where('slug', $slug)->firstOrFail();
        return view('tourcategory.show', compact('tourCategory'));
    }

    public function edit($slug)
    {
        $tourCategory = TourCategory::where('slug', $slug)->firstOrFail();
        $tourArticles = TourArticle::all();
        return view('tourcategory.edit', compact('tourCategory', 'tourArticles'));
    }

    public function update(Request $request, $slug)
    {
        $tourCategory = TourCategory::where('slug', $slug)->firstOrFail();

        $request->validate([
            'nama_kategori' => 'required',
            'foto_tour' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'activity' => 'required',
            'start' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'tour_article_id' => 'exists:tour_articles,id'
        ]);

        $slug = Str::slug($request->nama_kategori);

        $tourCategory->nama_kategori = $request->nama_kategori;
        $tourCategory->slug = $slug;
        $tourCategory->activity = $request->activity;
        $tourCategory->start = $request->start;
        $tourCategory->duration = $request->duration;
        $tourCategory->price = $request->price;
        $tourCategory->tour_article_id = $request->tour_article_id;

        if ($request->hasFile('foto_tour')) {
            $fotoPath = $request->file('foto_tour')->store('tour_category', 'public');
            $tourCategory->foto_tour = $fotoPath;
        }

        $tourCategory->save();

        return redirect()->route('tourcategories.index')->with('success', 'Kategori Tour berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $tourCategory = TourCategory::where('slug', $slug)->firstOrFail();
        $tourCategory->delete();

        return redirect()->route('tourcategories.index')->with('success', 'Kategori Tour berhasil dihapus.');
    }
}
