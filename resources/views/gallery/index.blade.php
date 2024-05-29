@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Gallery</a>
    </p>
</div>
<div class="container mt-3">
    <hr>
    <h4 class="fw-bold text-center">Galleri Foto </h4>

    <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#gambarModal">
        Upload Gambar
      </button>

      @include('gallery.create')
    {{-- <a href="{{ route('gallery.create') }}" class="btn btn-success mb-3 mt-3" onclick="pindahHalaman()">Upload Foto Baru</a> --}}
      
    <div class="row " style="background-color: #c9c9c9; border-radius:15px;">
        @foreach ($gallerys as $gallery)
            <div class="col-md-3 mb-3 mt-3">
                <div class="card">
                    <img src="{{ asset($gallery->image_path) }}" alt="{{ $gallery->image_path }}" data-lightbox="gallery" class="card-img-top" style="width: auto; height:auto;">
                    <div class="card-body text-center">
                        <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-info btn-sm" onclick="pindahHalaman()">Detail</a>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$gallery->id}}">
                            Edit
                          </button>
                          @include('gallery.edit')
                        {{-- <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-inline" id="deleteGambar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" >Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @if ($gallerys->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $gallerys->previousPageUrl() }}">Previous</a>
                    </li>
                @endif

                @for ($i = 1; $i <= $gallerys->lastPage(); $i++)
                    <li class="page-item {{ $i == $gallerys->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $gallerys->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ($gallerys->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $gallerys->nextPageUrl() }}">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>


@endsection