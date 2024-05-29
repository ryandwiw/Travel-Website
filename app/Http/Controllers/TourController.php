<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourArticle;
use Illuminate\Support\Str;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        // $tours = Tour::all();
        $tours = Tour::paginate(10);
        return view('tour.index', compact('tours'));
    }

    public function create()
    {
        $tourCategories = TourCategory::all();
        return view('tour.create', compact('tourCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'isi' => 'required',
            'tour_categories' => 'required|array',
            'tour_categories.*' => 'exists:tour_categories,id',
        ]);

        $tour = new Tour();
        $tour->nama = $request->nama;
        $tour->slug = Str::slug($request->nama, '-');
        $tour->isi = $request->isi;
        
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('toursphoto'), $fotoName);
            $tour->foto = 'toursphoto/' . $fotoName;
        }
        

        $tour->save();

        $tour->categories()->attach($request->tour_categories);

        return redirect()->route('tours.index')->with('success', 'Tour berhasil ditambahkan.');
    }

    public function show($slug)
    {
        $tourArticle = TourArticle::all();
        $tour = Tour::where('slug', $slug)->firstOrFail();
        return view('tour.show', compact('tour','tourArticle'));
    }

    public function edit($slug)
    {
        $tour = Tour::where('slug', $slug)->firstOrFail();
        $tourCategories = TourCategory::all();
        return view('tour.edit', compact('tour', 'tourCategories'));
    }

    public function update(Request $request, $slug)
    {
        $tour = Tour::where('slug', $slug)->firstOrFail();

        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'isi' => 'required',
            'tour_categories' => 'required|array',
            'tour_categories.*' => 'exists:tour_categories,id',
        ]);

        $tour->nama = $request->nama;
        $tour->slug = Str::slug($request->nama, '-');
        $tour->isi = $request->isi;


        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('toursphoto'), $fotoName);
            $tour->foto = 'toursphoto/' . $fotoName;
        }

        $tour->save();

        $tour->categories()->sync($request->tour_categories);

        return redirect()->route('tours.index')->with('success', 'Tour berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $tour = Tour::where('slug', $slug)->firstOrFail();
        $tour->categories()->detach();
        $tour->delete();

        return redirect()->route('tours.index')->with('success', 'Tour berhasil dihapus.');
    }
}
