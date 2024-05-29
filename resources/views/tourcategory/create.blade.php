<!-- resources/views/tourcategory/create.blade.php -->

@extends('layouts.admin')

@section('isi')
    <div class="mb-1" style="margin-left: 13px;">
        <p class="">
            <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; ">Dashboard</a> /
            <a href="{{route('tourcategories.index')}}" style="text-decoration: none; color: inherit;">Tours Category</a> /
            <a class="fw-bold" style="text-decoration: none; color:inherit; cursor:text;">Create</a>
        </p>
        <h3 class="text-center fw-bold">Travel Admin</h3>
        <hr>
    </div>

    <div class="container">
        <h4 class="fw-bold">Tambah Kategori Tour</h4>
        <form action="{{ route('tourcategories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
                <label for="nama_kategori" class="mb-2 mt-3">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Tour Kategori">
            </div>
            <div class="form-group mt-3">
                <label for="foto_tour" class="mb-2">Foto Tour</label>
                <input type="file" class="form-control" id="foto_tour" name="foto_tour">
            </div>
            <div class="form-group mt-2">
                <label for="activity" class="mb-2">Aktivitas</label>
                <input type="text" class="form-control" id="activity" name="activity" placeholder="Aktivitas">
            </div>
            <div class="form-group mt-2">
                <label for="start" class="mb-2">Start</label>
                <input type="text" class="form-control" id="start" name="start" placeholder="12 am">
            </div>
            <div class="form-group mt-2">
                <label for="duration" class="mb-2">Durasi</label>
                <input type="text" class="form-control" id="duration" name="duration" placeholder="Durasi">
            </div>
            <div class="form-group mt-2">
                <label for="price" class="mb-2">Harga</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Rp. 1.000.000">
            </div>
            <div class="form-group mt-3">
                <label for="tour_article_id" class="mb-2">Tour Article Relation</label>
                <select class="form-control" id="tour_article_id" name="tour_article_id">
                    @foreach ($tourArticles as $article)
                        <option value="{{ $article->id }}">{{ $article->judul_tour_article }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
@endsection
