@extends('layouts.guest')

@section('isi')
    <style>
        .product-description {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
    <div class="container" style="margin-top: 90px; margin-bottom:50px;">
        <h3 class="text-center">Pencarian</h3>
        <div class="mb-3 mt-3">
            @if (request()->has('query'))
                <h5 class="text-start">Hasil pencarian untuk kata kunci: <strong>{{ request('query') }}</strong></h5>
            @endif
        </div>

        <hr>
        <h3 class="mb-3 mt-3">Tours</h3>
        <div class="row mb-3">
            @forelse($tours as $product)
                <div class="col-md-4">
                    <img src="{{ asset($product->foto) }}" class="img-fluid" alt="{{ $product->nama }}" loading="lazy">
                </div>
                <div class="col-md-8">
                    <h5>{{ $product->nama }}</h5>
                    <p>{{ substr(strip_tags($product->isi), 0, 150) }}{{ strlen(strip_tags($product->isi)) > 150 ? '...' : '' }}</p>
                        <a href="{{ route('tours.show', $product->slug) }}" class="fw-bold"
                            style=" font-size:15px ; text-decoration: none; color:inherit;">Baca selengkapnya ></a>
                </div>

                <hr>
            @empty
                <p>Tidak ada hasil pencarian yang sesuai untuk Produk.</p>
            @endforelse
        </div>
        <hr>
        <h3 class="mb-3 mt-3">Articles</h3>

        <div class="row mb-3">
            @forelse($artikels as $article)
                <div class="col-md-4">
                    <img src="{{ asset($article->gambar_1) }}" class="card-img" alt="{{ $article->judul }}" loading="lazy">
                </div>
                <div class="col-md-8">
                    <h5>{{ $article->judul }}</h5>
                    <p>{{ substr(strip_tags($article->isi), 0, 150) }}{{ strlen(strip_tags($article->isi)) > 150 ? '...' : '' }}
                    </p>



                    <a href="{{ route('artikels.show', $article->slug) }}" class="fw-bold"
                        style=" font-size:15px ; text-decoration: none; color:inherit;">Baca selengkapnya ></a>
                </div>
                <hr>
            @empty
                <p>Tidak ada hasil pencarian yang sesuai untuk Produk.</p>
            @endforelse
        </div>


    </div>
@endsection
