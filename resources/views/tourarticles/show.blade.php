

@extends('layouts.guest')

@section('isi')
    <div style="margin-top: 50px;">
        <img src="{{ asset('images/' . $tourArticle->foto_tour_article) }}" class="img-fluid" alt="Foto Tour Article"
            style="width: 100%;" height="470px; object-fit:cover;">
    </div>

  


            
        
 
          <div class="text-center bg-dark text-white">
            <div class="row" style="margin-right: 0px;">
                <div class="col-md-4 mt-3">
                    <i class="fas fa-users fa-2x"></i>
                    <p class="">{{ $tourArticle->lokasi_tour_article }}</p>
                </div>
                <div class="col-md-4 mt-3">
                    <i class="fas fa-cubes fa-2x"></i>
                    <p class="">{{ $tourArticle->jumlah_orang }}</p>
                </div>
                <div class="col-md-4 mt-3">
                    <i class="fas fa-file-alt fa-2x"></i>
                    <p class="">{{ $tourArticle->biaya_tour_article }}</p>
                </div>
            </div>
        </div>
        
    <div class="container mt-5 mb-5">


        <div class="row justify-content-center">
            <div class="col">
                <div class="btn-container">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank"
                        class="btn btn-primary">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}" target="_blank"
                        class="btn btn-info text-white" >
                        <i class="fab fa-twitter" style="color:white;"></i> Twitter
                    </a>
                    <a href="https://plus.google.com/share?url={{ urlencode(Request::url()) }}" target="_blank"
                        class="btn btn-success">
                        <i class="fab fa-google"></i> Google
                    </a>
                    <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(Request::url()) }}" target="_blank"
                        class="btn btn-danger">
                        <i class="fab fa-pinterest"></i> Pinterest
                    </a>
                </div>
            </div>
        </div>



        <div class="text-center mt-4 mb-4">
            <h1 class="text-uppercase fw-bold">{{ $tourArticle->judul_tour_article }}</h1>
        </div>
        <div>
            {!! $tourArticle->isi_tour_article !!}
        </div>

        <div class="mt-5 mb-5">
            <h5>Tertarik dengan Tour ini ?</h5>
            <a href="https://api.whatsapp.com/send?phone=628123456789" target="_blank" class="btn btn-primary">Kirim Pesan
                via WhatsApp</a>
        </div>
    </div>


    <style>


        .btn-container {
            display: flex;
            justify-content: space-around;
        }

        .btn-container .btn {
            flex-grow: 1;
            margin: 0 5px;

        }

        @media (max-width: 576px) {
            .btn-container {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-container .btn {
                flex-grow: unset;
                margin: 5px 0;
            }
        }
    </style>
@endsection
