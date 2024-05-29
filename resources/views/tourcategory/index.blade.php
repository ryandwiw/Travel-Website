<!-- resources/views/tourcategory/index.blade.php -->
@extends(auth()->check() ? 'layouts.admin' : 'layouts.guest')


@section('isi')

@auth
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; ">Dashboard</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Tours Category</a>
    </p>
</div>
<div class="container">
    <hr>
    <h4 class="fw-bold text-center">Daftar Kategori Tour</h4>
    <a href="{{ route('tourcategories.create') }}" class="btn btn-primary mb-3 mt-3">Tambah Kategori Tour</a>
    <table class="table" style="overflow: hidden; border-radius:10px;">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Foto Tour</th>
                <th>Aktivitas</th>
                <th>Start</th>
                <th>Durasi</th>
                <th>Harga</th>
                <th>Artikel Terkait</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tourCategories as $tourCategory)
                <tr>
                    <td>{{ $tourCategory->nama_kategori }}</td>
                    <td>
                        @if ($tourCategory->foto_tour)
                            <img src="{{ asset($tourCategory->foto_tour) }}" alt="Foto Tour"
                                style="max-width: 225px; height:auto;">
                        @else
                            No image
                        @endif
                    </td>
                    <td>{{ $tourCategory->activity }}</td>
                    <td>{{ $tourCategory->start }}</td>
                    <td>{{ $tourCategory->duration }}</td>
                    <td>{{ $tourCategory->price }}</td>
                    <td>
                        @if ($tourCategory->tourArticle)
                            {{ $tourCategory->tourArticle->judul_tour_article }}
                        @else
                            No related article
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tourcategories.show', $tourCategory->slug) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        
                        <a href="{{ route('tourcategories.edit', $tourCategory->slug) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> 
                        </a>
                        
                        <form action="{{ route('tourcategories.destroy', $tourCategory->slug) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">
                                <i class="fas fa-trash-alt"></i> 
                            </button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@else

<div class="container" style="margin-top: 70px;">
    <div class="">
        <h1 class="text-center fw-bold text-uppercase">Our Trip</h1>
        <p class="text-center fw-light jarak-text-co-lead">Let's Join Our Trip </p>
        <div class="mt-3 mb-3 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor, ligula sit amet gravida lobortis.
            </p>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="">
            <!-- Loop through each artikel -->
            @foreach ($tourCategories as $tourCategory)
                <div class="row mt-3">
                    <div class="col-12 text-center ">
                        <div class="img-hover-zoom-tour mx-auto ">
                            <img src="{{ asset($tourCategory->foto_tour) }}" class="img-fluid mr-3" alt="Blog Post Image"
                                style=" ">
                        </div>

                    </div>
                    <div class="col-12">
                        <h4 class="mt-0 fw-bold">{{ $tourCategory->nama_kategori }}</h4>
                        <div class="mt-4 p-1" style="text-align: justify;">

                            <td>{{ $tourCategory->activity }}</td>

                        </div>

                        <div class="text-center mb-3 mt-3">
                            <a href="{{ route('tours.index') }}" class="fw-bold btn btn-secondary"
                                style="color: inherit; text-decoration:none; font-size:13px;">Baca Selengkapnya</a>

                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            <div class="d-flex justify-content-center">

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        @if ($tourCategories->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $tourCategories->previousPageUrl() }}">Previous</a>
                            </li>
                        @endif

                        @for ($i = 1; $i <= $tourCategories->lastPage(); $i++)
                            <li class="page-item {{ $i == $tourCategories->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $tourCategories->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        @if ($tourCategories->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $tourCategories->nextPageUrl() }}">Next</a>
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
    </div>
</div>
@endauth
   
@endsection
