@extends(auth()->check() ? 'layouts.admin' : 'layouts.guest')


@section('isi')
    @auth

        <div class="mb-1" style="margin-left: 13px;">
            <p class="">
                <a href="{{ route('dashboard') }}" style="text-decoration: none; color: inherit; ">Dashboard</a> /
                <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Tours</a>
            </p>
        </div>

        <div class="container">
            <hr>
            <h4 class="fw-bold text-center">List Tours</h4>
            <a href="{{ route('tours.create') }}" class="btn btn-primary">Tambah Tour</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $tour->nama }}</td>
                            <td> <img src="{{ asset($tour->foto) }}" alt="" class="img-fluid"
                                    style="width:300px;height:auto; object-fit:cover;">
                            </td>
                            <td>
                                @if ($tour->categories->isNotEmpty())
                                    {{ $tour->categories->implode('nama_kategori', ', ') }}
                                @else
                                    No categories
                                @endif
                            </td>
                            <td>{!! substr(strip_tags($tour->isi), 0, 300) !!}</td>
                            <td>
                                <a href="{{ route('tours.show', $tour->slug) }}" class="btn btn-info">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="{{ route('tours.edit', $tour->slug) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('tours.destroy', $tour->slug) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this tour?')">
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
                    @foreach ($tours as $tour)
                        <div class="row mt-3">
                            <div class="col-12 text-center ">
                                <div class="img-hover-zoom-tour mx-auto ">
                                    <img src="{{ asset($tour->foto) }}" class="img-fluid mr-3" alt="Blog Post Image"
                                        style=" ">
                                </div>

                            </div>
                            <div class="col-12">
                                <h4 class="mt-0 fw-bold">{{ $tour->judul }}</h4>
                                <div class="mt-4 p-1" style="text-align: justify;">

                                    <p>{{ str_replace('&nbsp;', ' ', substr(strip_tags($tour->isi), 0, 300)) }}...</p>
                                </div>

                                <div class="text-center mb-3 mt-3">
                                    <a href="{{ route('tours.show', $tour->slug) }}" class="fw-bold btn btn-secondary"
                                        style="color: inherit; text-decoration:none; font-size:13px;">Baca Selengkapnya</a>

                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="d-flex justify-content-center">

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                @if ($tours->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $tours->previousPageUrl() }}">Previous</a>
                                    </li>
                                @endif

                                @for ($i = 1; $i <= $tours->lastPage(); $i++)
                                    <li class="page-item {{ $i == $tours->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $tours->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                @if ($tours->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $tours->nextPageUrl() }}">Next</a>
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

    <style>
        .img-hover-zoom-tour {
            height: 430px;
            width: 700px;
            overflow: hidden;
            border: solid 5px black;

        }


        .img-hover-zoom-tour img {
            transition: transform 2s, filter 1.5s ease-in-out;
            transform-origin: center center;
            filter: brightness(90%);
        }


        .img-hover-zoom-tour:hover img {
            filter: brightness(106%);
            transform: scale(1.07);
        }


        @media(max-width:767px) {
            .img-hover-zoom-tour {
                height: 300px;
                width: 100%;
            }

            .img-hover-zoom-tour img{
                height: 300px;
                width: 100%;
            }
        }
        
    </style>
@endsection
