<!-- resources/views/tourarticles/edit.blade.php -->

@extends('layouts.admin')

@section('isi')
    <div class="mb-1" style="margin-left: 13px;">
        <p class="">
            <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; ">Dashboard</a> /
            <a href="{{ route('tourarticles.index') }}" style="text-decoration: none; color: inherit;">Tours Article</a> /
            <a class="fw-bold"
                style="text-decoration: none; color:inherit; cursor:text;">{{ $tourArticle->judul_tour_article }}</a>
        </p>
        <hr>
    </div>
    <div class="container mt-3">
        <hr>
        <h4 class="fw-bold text-center">Edit Tour Article</h4>
        <form action="{{ route('tourarticles.update', $tourArticle->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Form fields for editing the tour article -->
            <div class="form-group mt-2">
                <label for="judul_tour_article" class="fw-bold mb-3">Judul:</label>
                <input type="text" class="form-control" id="judul_tour_article" name="judul_tour_article"
                    value="{{ $tourArticle->judul_tour_article }}" required>
            </div>
            <div class="form-group mt-2">
                <label for="lokasi_tour_article" class="fw-bold mb-3">Lokasi:</label>
                <input type="text" class="form-control" id="lokasi_tour_article" name="lokasi_tour_article"
                    value="{{ $tourArticle->lokasi_tour_article }}" required>
            </div>
            <div class="form-group mt-2">
                <label for="jumlah_orang" class="fw-bold mb-3">Jumlah Orang:</label>
                <input type="text" class="form-control" id="jumlah_orang" name="jumlah_orang"
                    value="{{ $tourArticle->jumlah_orang }}" required>
            </div>
            <div class="form-group mt-2">
                <label for="biaya_tour_article" class="fw-bold mb-3">Biaya:</label>
                <input type="text" class="form-control" id="biaya_tour_article" name="biaya_tour_article"
                    value="{{ $tourArticle->biaya_tour_article }}" required>
            </div>
            <div class="form-group mt-2">
                <label for="isi_tour_article" class="fw-bold mb-3">Isi Tour Article:</label>
                <textarea class="form-control" id="isi_tour_article" name="isi_tour_article" rows="5">{{ $tourArticle->isi_tour_article }}</textarea>

            </div>
            <div class="form-group mt-2 mb-3">
                <label for="foto_tour_article" class="fw-bold mb-3">Foto:</label>
                <input type="file" class="form-control" id="foto_tour_article" name="foto_tour_article">
                <img src="{{ asset('images/' .$tourArticle->foto_tour_article)}}" alt="{{ $tourArticle->foto_tour_article}}" class="img-fluid mt-3" style="width:200px; height:auto">
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Simpan</button>
        </form>
    </div>
@endsection
