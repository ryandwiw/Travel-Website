@extends('layouts.guest')

@section('isi')
    <div class="container" style="margin-top: 90px;">
        <div class="row justify-content-center">

                <h4 class="fw-bold text-center text-uppercase">Artikels in this category</h4>
                <h2 class="fw-bold text-center text-uppercase mb-4">{{$category->name}}</h2>
                <hr class="mb-4">
                @if ($artikels->isEmpty())
                    <p>No articles found in this category.</p>
                @else

                        @foreach ($artikels as $article)
                            <div class="row mt-3 justify-content-center mb-3">
                                <div class="col-md-4">
                                    <div class="image-container-custom">
                                        <img src="{{ asset($article->gambar_1) }}"
                                            class="img-fluid float-left mr-3 fixed-height-img zoom-effect"
                                            alt="Blog Post Image" style="border-radius: 13px;">
                                    </div>
                                </div>
                                <div class="col-md-8 mt-2">
                                    <p style="font-size: 12px;"><i class="fa fa-user" aria-hidden="true" style="margin-right: 5px;"></i><strong class="text-capitalize">{{$article->penulis}}</strong> | {{ $article->created_at->format('F j, Y') }}</p>

                                    <h4 class="mt-0 fw-bold">{{ $article->judul }}</h4>
                                    <!-- Tambahkan kategori di sini -->
                                    <p class="mt-3 mb-3">
                                        @foreach ($article->categories as $category)
                                            <a href="{{ route('categories.show', ['category' => $category->slug]) }}" class="btn btn-secondary btn-sm mt-2" >
                                                {{ $category->name }}
                                            </a>
                                        @endforeach
                                    </p>
                                    <!-- Akhir penambahan kategori -->
                                    <p style="font-size: 13px; margin-top:10px;">
                                        {{ str_replace('&nbsp;', ' ', substr(strip_tags($article->isi), 0, 300)) }}...
                                    </p>
                                    <a href="{{ route('artikels.show', $article->slug) }}"
                                        class="fw-bold btn btn-secondary"
                                        style="color: inherit; text-decoration:none; font-size:13px;">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                @endif

        </div>
        <div class="d-flex justify-content-center">

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if ($artikels->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $artikels->previousPageUrl() }}">Previous</a>
                        </li>
                    @endif

                    @for ($i = 1; $i <= $artikels->lastPage(); $i++)
                        <li class="page-item {{ $i == $artikels->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $artikels->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    @if ($artikels->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $artikels->nextPageUrl() }}">Next</a>
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
