@extends('layouts.admin')

@section('isi')

<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a href="{{route('artikels.index')}}" style="text-decoration: none; color: inherit; ">Artikel</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Create</a>

    </p>
</div>

<div class="container mt-2">
    <hr>
    <h3 class="fw-bold text-center">Tambah Artikel Baru</h3>

    <form action="{{ route('artikels.store') }}" method="post" enctype="multipart/form-data" id="inputForm">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul:</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>         
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Utama:</label>
            <input type="file" name="gambar_1" id="gambar_1" class="form-control">
        </div>
        <div id="gambar-inputs-container">
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis:</label>
            <input type="text" name="penulis" id="penulis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Artikel:</label>
            {{-- <input type="text" name="isi" id="isi" class="form-control" required> --}}
            <textarea name="isi" id="isi" class="form-control" rows="5"></textarea>
        </div>

        <div class="form-group mt-3 mb-3">
            <label for="group" class="mb-3 fw-bold">Pilih Kategori Tours</label>
            <div class="dropdown"> 
                <button class="btn btn-success dropdown-toggle" type="button" id="multiSelectDropdown" data-bs-toggle="dropdown" aria-expanded="false"> 
                    Select 
                </button> 
                <ul class="dropdown-menu" aria-labelledby="multiSelectDropdown"> 
                    @foreach($categories as $category)
                    <li> 
                        <label> 
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}"> {{ $category->name }} 
                        </label> 
                    </li> 
                    @endforeach
                </ul> 
            </div> 
            
        </div>
        <button type="submit" class="btn btn-primary mb-3">Simpan Artikel</button>
    </form>
</div>

<script>



@endsection

