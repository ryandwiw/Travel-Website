@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a href="{{route('tours.index')}}" style="text-decoration: none; color: inherit; ">Tours</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Create</a>

    </p>
</div>
<div class="container mt-3">
    <hr>
    <h3 class="text-center fw-bold">Tambah Tour Baru</h3>
    <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama" class="mb-3 fw-bold">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group mt-3 mb-3">
            <hr>
            <label for="foto" class="fw-bold">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            <hr>
        </div>
        
        <div class="form-group">
            <label for="isi" class="fw-bold form-label">Isi</label>
            <textarea name="isi" id="isi" class="form-control" rows="5"></textarea>
        </div>

        <div class="form-group mt-3 mb-3">
            <label for="group" class="mb-3 fw-bold">Pilih Kategori Tours</label>
            <div class="dropdown"> 
                <button class="btn btn-success dropdown-toggle" type="button" id="multiSelectDropdown" data-bs-toggle="dropdown" aria-expanded="false"> 
                    Select 
                </button> 
                <ul class="dropdown-menu" aria-labelledby="multiSelectDropdown"> 
                    @foreach($tourCategories as $category)
                    <li> 
                        <label> 
                            <input type="checkbox" name="tour_categories[]" value="{{ $category->id }}"> {{ $category->nama_kategori }} 
                        </label> 
                    </li> 
                    @endforeach
                </ul> 
            </div> 
            
        </div>
        
        <hr>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
   

   
    
@endsection
