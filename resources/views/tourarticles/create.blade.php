@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; ">Dashboard</a> /
        <a href="{{ route('tourarticles.index') }}" style="text-decoration: none; color: inherit;">Tours Article</a> /
        <a class="fw-bold"
            style="text-decoration: none; color:inherit; cursor:text;">Create</a>
    </p>
    <hr>
</div>
    <div class="container mt-3">
        <h2>Tambah Tour Article</h2>
        <form action="{{ route('tourarticles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Form fields for creating a new tour article -->
            <div class="form-group mb-3 mt-3">
                <label for="judul_tour_article">Judul:</label>
                <input type="text" class="form-control" id="judul_tour_article" name="judul_tour_article" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="lokasi_tour_article">Lokasi:</label>
                <input type="text" class="form-control" id="lokasi_tour_article" name="lokasi_tour_article" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="jumlah_orang">Jumlah Orang:</label>
                <input type="text" class="form-control" id="jumlah_orang" name="jumlah_orang" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="biaya_tour_article">Biaya:</label>
                <input type="text" class="form-control" id="biaya_tour_article" name="biaya_tour_article" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="isi_tour_article">Isi Tour Article:</label>
                <textarea class="form-control" id="isi_tour_article" name="isi_tour_article" rows="5" ></textarea>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="foto_tour_article">Foto:</label>
                <input type="file" class="form-control" id="foto_tour_article" name="foto_tour_article">
            </div>
            <button type="submit" class="btn btn-primary mt-4 mb-3">Simpan</button>
        </form>
    </div>
@endsection


