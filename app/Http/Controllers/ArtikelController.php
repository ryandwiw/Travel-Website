<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    protected function createSlug($title)
    {
        return Str::slug($title);
    }

    public function index(Request $request)
    {
        $urutan = $request->input('urutan', 'terbaru');
    
        if (!in_array($urutan, ['terbaru', 'terlama'])) {
            abort(400, 'Nilai urutan tidak valid.');
        }
    
        $artikels = Artikel::orderBy('created_at', $urutan == 'terbaru' ? 'desc' : 'asc')->paginate(10);
    
        return view('artikels.index', compact('artikels','urutan'));
    }
    

    public function create()
    {
        $categories = Category::all();
        return view('artikels.create' , compact('categories'));
    }

    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'penulis' => 'required',
        'gambar_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
    ]);

    $articleData = $request->only(['judul', 'isi', 'penulis']);
    $articleData['slug'] = $this->createSlug($request->input('judul'));
    $articleData['views'] = 0; // Set views to 0

    $artikels = Artikel::create($articleData);
    $artikels->categories()->attach($request->input('categories'));

    $fieldName = "gambar_1";
    if ($request->hasFile($fieldName)) {
        $gambar = $request->file($fieldName);
        $gambarName = time() . '_' . $gambar->getClientOriginalName();
        $gambar->move(public_path('main/artikels'), $gambarName);
        $artikels->$fieldName = 'main/artikels/' . $gambarName;
    }

    
    $artikels->save();

    return redirect()->route('artikels.index')->with('success', 'Artikel berhasil ditambahkan');
}


   
    public function show($slug)
{
    $artikel = Artikel::where('slug', $slug)->firstOrFail();
    // $komens = Komen::where('artikel_id', $artikel->id)->get();
    // $komens = Komen::where('artikel_id', $artikel->id)->with('replies')->get();
    $komens = Komen::whereNull('parent_id')->where('artikel_id', $artikel->id)->with('replies')->get();
    

    $ip = request()->ip();

    // Cek apakah IP sudah pernah mengunjungi artikel ini
    if (!$artikel->views()->where('ip', $ip)->exists()) {
        // Jika belum, tambahkan pengunjung dan simpan IP ke database
        $artikel->views()->create(['ip' => $ip]);
        $artikel->increment('views');
    }

    $artikels = Artikel::all();
    return view('artikels.show', compact('artikels', 'artikel', 'komens'));
}
    

public function edit($slug)
{
    $categories = Category::all();
    $artikel = Artikel::where('slug', $slug)->firstOrFail();
    return view('artikels.edit', compact('artikel','categories'));
}

    public function update(Request $request, $slug)
    {
        $artikels = Artikel::where('slug', $slug)->firstOrFail();
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'gambar_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
        ]);

        $articleData = $request->only(['judul', 'isi', 'penulis']);
        $articleData['slug'] = Str::slug($request->input('judul'));

        // Handle file upload for gambar_1 if any
        $fieldName = "gambar_1";
        if ($request->hasFile($fieldName)) {
            // Hapus gambar lama jika ada
            if ($artikels->$fieldName) {
                $oldImagePath = public_path($artikels->$fieldName);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $gambar = $request->file($fieldName);
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('main/artikels'), $gambarName);
            $artikels->$fieldName = 'main/artikels/' . $gambarName;
        }

        $artikels->update($articleData);
        $artikels->categories()->sync($request->input('categories'));

        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil diperbarui');
    }


    public function destroy($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
    
        // Hapus gambar sebelum menghapus artikel
        if ($artikel->gambar_1) {
            $oldImagePath = public_path($artikel->gambar_1);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
    
        $artikel->delete();
    
        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil dihapus');
    }
}
