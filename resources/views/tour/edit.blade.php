@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a href="{{route('tours.index')}}" style="text-decoration: none; color: inherit; ">Tours</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">{{$tour->nama}}</a>

    </p>
</div>
<div class="container">
     <h3 class="fw-bold text-center">Edit Tour</h3>
    <hr>

    <form action="{{ route('tours.update', $tour->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama" class="fw-bold mb-3">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $tour->nama }}">
        </div>
        <div class="form-group">
            <hr>
            <label for="foto" class="mb-3">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            <img src="{{asset($tour->foto)}}" alt="" class="img-fluid mt-3" style="width:300px;height:auto; object-fit:cover;">
            <hr>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Artikel:</label>
            {{-- <input type="text" name="isi" id="isi" class="form-control" value="{{ $artikel->isi }}"
            required> --}}
            <textarea name="isi" id="isi" class="form-control">{{ $tour->isi }}</textarea>
        </div>
        <div class="form-group" class="mt-3">
            <label for="tour_categories" class="mb-3">Kategori Tour</label>
            <div class="dropdown mb-4">
                <button class="btn btn-success dropdown-toggle" type="button" id="multiSelectDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Select
                </button>
                <ul class="dropdown-menu" aria-labelledby="multiSelectDropdown">
                    @foreach($tourCategories as $category)
                        <li>
                            <label>
                                <input type="checkbox" name="tour_categories[]" value="{{ $category->id }}" {{ $tour->categories->contains($category->id) ? 'checked' : '' }}> {{ $category->nama_kategori }}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
   
@endsection
