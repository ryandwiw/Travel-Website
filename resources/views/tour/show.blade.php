@extends('layouts.guest')

@section('isi')
    <div class="container" style="margin-top: 80px; ">
        <hr>

        <div class="text-center">
            <h1 class="fw-bold text-uppercase mb-3">{{ $tour->nama }}</h1>
        </div>

        <div class="img-hover-zoom-tour mx-auto d-flex justify-content-center align-items-center">
            <img src="{{ asset($tour->foto) }}">
        </div>


        <style>
          
            .img-hover-zoom-tour {
                height: 430px;
                width: 100%;
                overflow: hidden;

            }


            .img-hover-zoom-tour img {
                height: 530px;
                width: 100%;
                transition: transform 2s, filter 1.5s ease-in-out;
                transform-origin: center center;
                filter: brightness(90%);
            }


            .img-hover-zoom-tour:hover img {
                filter: brightness(106%);
                transform: scale(1.07);
            }

            @media (max-width: 768px) {
                .img-hover-zoom-tour {
                    height: 330px;
                    width: auto;
                    overflow: hidden;
                }

                .img-hover-zoom-tour img {
                height: 330px;
                width: auto !important;
            }

            }
            
        </style>

        <div class="row mt-5 mb-4">
            <div class="text-center mb-4">
                <h5 class="fw-bold">Jadwal Tour :</h5>
            </div>
            <div class="col-md-12">
                <div style="border-radius: 10px;">
                    <div class="table-responsive" >
                        <table class="table table-striped"
                            style="border:none !important; border-radius: 10px; overflow: hidden;">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="bg-dark text-light"></th>
                                    <th class="bg-dark text-light">Activity</th>
                                    <th class="bg-dark text-light">Harga</th>
                                    <th class="bg-dark text-light">Mulai</th>
                                    <th class="bg-dark text-light">Durasi</th>
                                    <th class="bg-dark text-light">Continue</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tour->categories as $category)
                                    <tr>
                                        <td class="bg-primary text-light" style="vertical-align: middle;"><img
                                                src="{{ asset($category->foto_tour) }}" alt="Foto Tour"
                                                style="max-width: 150px; border-radius:10px;"></td>
                                        <td class="bg-primary text-light" style="vertical-align: middle;">
                                            {{ $category->activity }}</td>
                                        <td class="bg-primary text-light" style="vertical-align: middle;">
                                            {{ $category->price }}</td>
                                        <td class="bg-primary text-light" style="vertical-align: middle;">
                                            {{ $category->start }}</td>
                                        <td class="bg-primary text-light" style="vertical-align: middle;">
                                            {{ $category->duration }}</td>
                                        <td class="bg-primary text-light" style="vertical-align: middle;">
                                            @if ($category->tourArticle)
                                                <a href="{{ route('tourarticles.show', $category->tourArticle->slug) }}"
                                                    class="btn btn-dark" style="text-decoration: none;">Continue</a>
                                            @else
                                                No associated article
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>





        
    </div>
@endsection
