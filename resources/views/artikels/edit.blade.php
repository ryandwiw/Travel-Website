@extends('layouts.admin')

@section('isi')

<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a href="{{route('artikels.index')}}" style="text-decoration: none; color: inherit; ">Artikel</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Create</a>

    </p>
</div>
    <div class="container">
        <hr style="color:white;">
        <h4 class="fw-bold text-center">Edit Artikel</h4>

        <form action="{{ route('artikels.update', $artikel->slug) }}" method="post" enctype="multipart/form-data"
            id="editForm">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul:</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $artikel->judul }}"
                    required>
            </div>

            <div id="gambar-inputs-container">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis:</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="{{ $artikel->penulis }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Artikel:</label>
                {{-- <input type="text" name="isi" id="isi" class="form-control" value="{{ $artikel->isi }}"
                required> --}}
                <textarea name="isi" id="isi" class="form-control">{{ $artikel->isi }}</textarea>
            </div>

            <div class="mb-3">

                @if ($artikel->gambar_1)
                    <img src="{{ asset($artikel->gambar_1) }}" alt="{{ $artikel->gambar_1 }}" class="img-fluid mb-3 mt-3"
                        style="max-width: 300px; max-height:300px;">
                @endif

                <label for="gambar_1" class="form-label">Gambar Utama :</label>
                <input type="file" class="form-control-file @error('gambar_1') is-invalid @enderror" id="gambar_1"
                    name="gambar_1">
                @error('gambar_1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


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
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}" 
                                    @if(in_array($category->id, $artikel->categories->pluck('id')->toArray())) 
                                        checked 
                                    @endif> {{ $category->name }} 
                                </label> 
                            </li> 
                        @endforeach
                    </ul> 
                </div> 
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
