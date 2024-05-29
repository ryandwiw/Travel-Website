<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomenController extends Controller
{
    // public function index()
    // {

    //     $komens = Komen::with('artikel')->latest()->paginate(10);
    //     return view('komens.index', compact('komens'));
    // }

    public function store(Request $request , $slug)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'komentar' => 'required',
        ]);

        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        $komen = new Komen();
        $komen->nama = $request->input('nama');
        $komen->email = $request->input('email');
        $komen->komentar = $request->input('komentar');
        $komen->artikel_id = $artikel->id;

        $komen->save();

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan');
    }

    // public function edit($id)
    // {
    //     $komen = Komen::findOrFail($id);
    //     return view('komens.edit', compact('komen'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'nama' => 'required|string',
    //         'email' => 'required|email',
    //         'isi_komentar' => 'required|string',
    //     ]);

    //     $komens = Komen::findOrFail($id);
    //     $komens->update([
    //         'nama' => $request->nama,
    //         'email' => $request->email,
    //         'isi_komentar' => $request->isi_komentar,
    //     ]);

    //     return redirect()->route('komens.index')->with('success', 'Komentar berhasil diperbarui');
    // }

    // public function destroy($id)
    // {
    //     $komen = Komen::findOrFail($id);
    //     $komen->delete();

    //     return redirect()->route('komens.index')->with('success', 'Komentar berhasil dihapus');
    // }

    public function reply(Request $request, $slug)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Anda harus login untuk membalas komentar');
        }

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'komentar' => 'required',
            'parent_id' => 'required|exists:komens,id',
        ]);

        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        $comment = new Komen();
        $comment->nama = $request->input('nama');
        $comment->email = $request->input('email');
        $comment->komentar = $request->input('komentar');
        $comment->artikel_id = $artikel->id;
        $comment->parent_id = $request->input('parent_id');

        $comment->save();

        return redirect()->back()->with('success', 'Balasan komentar berhasil ditambahkan');
    }
}
