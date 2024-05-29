<!-- resources/views/gallery/show.blade.php -->

@extends('layouts.admin')

@section('isi')
   
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a href="{{route('gallery.index')}}" style="text-decoration: none; color: inherit;  ">Gallery</a>
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Image</a>

    </p>
</div>

<div>
     <h3 class="fw-bold text-center">Detail Gambar</h3>

    <div class="text-center">

        <img src="{{ asset($gallery->image_path) }}" alt="Image" style="max-width: 800px;">
        <p class="mt-3 mb-3">Created At: {{ $gallery->created_at }}</p>

    </div>
</div>
   

@endsection
