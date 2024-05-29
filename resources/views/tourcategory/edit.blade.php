<!-- resources/views/tourcategory/edit.blade.php -->

@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; ">Dashboard</a> /
        <a href="{{route('tourcategories.index')}}" style="text-decoration: none; color: inherit;">Tours Category</a> /
        <a class="fw-bold" style="text-decoration: none; color:inherit; cursor:text;">{{$tourCategory->nama_kategori}}</a>
    </p>
    <hr>
</div>
    <div class="container">
        <h4 class="fw-bold text-center">Edit Kategori Tour</h4>
        <form action="{{ route('tourcategories.update', $tourCategory->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="nama_kategori" class="mb-3 fw-bold">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $tourCategory->nama_kategori }}">
            </div>
            <div class="form-group mb-3">
                <label for="foto_tour" class="mb-3 fw-bold">Foto Tour</label>
                <input type="file" class="form-control" id="foto_tour" name="foto_tour">
                <img src="{{asset($tourCategory->foto_tour)}}" alt="" class="img-fluid mt-3" style="width:300px;height:auto; object-fit:cover;">

            </div>
            <div class="form-group mb-3">
                <label for="activity" class="mb-3 fw-bold">Aktivitas</label>
                <input type="text" class="form-control" id="activity" name="activity" value="{{ $tourCategory->activity }}">
            </div>
            <div class="form-group mb-3">
                <label for="start" class="mb-3 fw-bold">Start</label>
                <input type="text" class="form-control" id="start" name="start" value="{{ $tourCategory->start }}">
            </div>
            <div class="form-group mb-3">
                <label for="duration" class="mb-3 fw-bold">Durasi</label>
                <input type="text" class="form-control" id="duration" name="duration" value="{{ $tourCategory->duration }}">
            </div>
            <div class="form-group mb-3">
                <label for="price" class="mb-3 fw-bold">Harga</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $tourCategory->price }}">
            </div>
            <div class="form-group mt-3">
                <label for="tour_article_id" class="mb-3 fw-bold">Tour Article Relation</label>
                <select class="form-control" id="tour_article_id" name="tour_article_id">
                    @foreach ($tourArticles as $article)
                        <option value="{{ $article->id }}" @if($article->id == $tourCategory->tour_article_id) selected @endif>{{ $article->judul_tour_article }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
        </form>
    </div>
@endsection
