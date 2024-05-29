<!-- resources/views/tourarticles/index.blade.php -->
@extends(auth()->check() ? 'layouts.admin' : 'layouts.guest')


@section('isi')
@auth
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Tour Articles</a>
    </p>
</div>
    <div class="container">
        <hr>
        <h4 class="fw-bold text-center">Daftar Tour Articles</h4>
        <a href="{{ route('tourarticles.create') }}" class="btn btn-primary mb-4">Tambah Tour Article</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Lokasi</th>
                    <th>Jumlah Orang</th>
                    <th>Biaya</th>
                    <th>Photo</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tourArticles as $tourArticle)
                    <tr>
                        <td>{{ $tourArticle->judul_tour_article }}</td>
                        <td>{{ $tourArticle->lokasi_tour_article }}</td>
                        <td>{{ $tourArticle->jumlah_orang }}</td>
                        <td>{{ $tourArticle->biaya_tour_article }}</td>
                        <td><img src="{{ asset('images/' .$tourArticle->foto_tour_article)}}" alt="{{ $tourArticle->foto_tour_article}}" class="img-fluid" style="width:200px; height:auto"></td>
                        <td>
                            <p>{!! substr($tourArticle->isi_tour_article, 0, 300) !!}</p>
                        </td>
                        
                        
                        <td>
                            <a href="{{ route('tourarticles.show', $tourArticle->slug) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('tourarticles.edit', $tourArticle->slug) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('tourarticles.destroy', $tourArticle->slug) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
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
                @foreach ($tourArticles as $tourArticle)
                    <div class="row mt-3">
                        <div class="col-12 text-center mb-3">
                            <div class="img-hover-zoom-tour mx-auto ">
                                <img src="{{ asset('images/' .$tourArticle->foto_tour_article)}}" class="img-fluid mr-3" alt="Blog Post Image"
                                    style=" ">
                            </div>

                        </div>
                        <div class="col-12">
                            <h4 class="mt-0 fw-bold">{{ $tourArticle->judul_tour_article }}</h4>
                            <div class="mt-4 p-1" style="text-align: justify;">

                                <p>{!! str_replace('&nbsp;', ' ', substr(strip_tags($tourArticle->isi_tour_article), 0, 300)) !!}...</p>
                            </div>

                            <div class="text-center mb-3 mt-3">
                                <a href="{{ route('tourarticles.show', $tourArticle->slug) }}" class="fw-bold btn btn-secondary"
                                    style="color: inherit; text-decoration:none; font-size:13px;">Baca Selengkapnya</a>

                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            @if ($tourArticles->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $tourArticles->previousPageUrl() }}">Previous</a>
                                </li>
                            @endif
                
                            @for ($i = 1; $i <= $tourArticles->lastPage(); $i++)
                                <li class="page-item {{ $i == $tourArticles->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $tourArticles->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                
                            @if ($tourArticles->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $tourArticles->nextPageUrl() }}">Next</a>
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
