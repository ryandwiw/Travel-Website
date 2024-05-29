<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourArticle;
use Illuminate\Support\Str;

class TourArticleController extends Controller
{
    public function index(Request $request)
    {
        // $category = Category::where('slug', $slug)->firstOrFail();

        // $tourArticles = TourArticle::all();
        $tourArticles = TourArticle::paginate(10);

        return view('tourarticles.index', compact('tourArticles'));
    }

    public function create()
    {
        return view('tourarticles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_tour_article' => 'required',
            'lokasi_tour_article' => 'required',
            'jumlah_orang' => 'required',
            'biaya_tour_article' => 'required',
            'isi_tour_article' => 'required',
            'foto_tour_article' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tourArticle = new TourArticle();
        $tourArticle->judul_tour_article = $request->judul_tour_article;
        $tourArticle->lokasi_tour_article = $request->lokasi_tour_article;
        $tourArticle->jumlah_orang = $request->jumlah_orang;
        $tourArticle->biaya_tour_article = $request->biaya_tour_article;
        $tourArticle->isi_tour_article = $request->isi_tour_article;
        
        // Generate and set slug
        $tourArticle->slug = Str::slug($request->judul_tour_article, '-');

        // Upload photo if provided
        
        if ($request->hasFile('foto_tour_article')) {
            $image = $request->file('foto_tour_article');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $tourArticle->foto_tour_article = $imageName;
        }

        $tourArticle->save();

        return redirect()->route('tourarticles.index')->with('success', 'Tour Article berhasil ditambahkan.');
    }

    public function show($slug)
    {
        
        $tourArticle = TourArticle::where('slug', $slug)->firstOrFail();
        return view('tourarticles.show', compact('tourArticle'));
    }

    public function edit($slug)
    {
        $tourArticle = TourArticle::where('slug', $slug)->firstOrFail();
        return view('tourarticles.edit', compact('tourArticle'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'judul_tour_article' => 'required',
            'lokasi_tour_article' => 'required',
            'jumlah_orang' => 'required',
            'biaya_tour_article' => 'required',
            'isi_tour_article' => 'required',
            'foto_tour_article' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tourArticle = TourArticle::where('slug', $slug)->firstOrFail();
        $tourArticle->judul_tour_article = $request->judul_tour_article;
        $tourArticle->lokasi_tour_article = $request->lokasi_tour_article;
        $tourArticle->jumlah_orang = $request->jumlah_orang;
        $tourArticle->biaya_tour_article = $request->biaya_tour_article;
        $tourArticle->isi_tour_article = $request->isi_tour_article;

        // Update photo if provided
        if ($request->hasFile('foto_tour_article')) {
            $image = $request->file('foto_tour_article');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $tourArticle->foto_tour_article = $imageName;
        }

        $tourArticle->save();

        return redirect()->route('tourarticles.index')->with('success', 'Tour Article berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $tourArticle = TourArticle::where('slug', $slug)->firstOrFail();
        $tourArticle->delete();

        return redirect()->route('tourarticles.index')->with('success', 'Tour Article berhasil dihapus.');
    }
}
