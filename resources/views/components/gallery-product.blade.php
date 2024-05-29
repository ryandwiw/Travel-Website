<div class="">
    <div class="text-center mb-3">
        <h4 class="fw-bold text-primary text-start mobile-gallery-landing">Ready For a Magical Gallerys</h4>
    </div>

    <div class="row mx-0 overflow-auto">
        @foreach ($gallerys->take(6) as $gallery)
        <div class="col-md-2 col-12 px-0">
            <div class="image-container-custom">
                <a href="{{ asset($gallery->image_path) }}" data-fancybox="gallery">
                    <img src="{{ asset($gallery->image_path) }}" data-title="My caption" loading="lazy" alt="{{ $gallery->image_path }}" class="card-img-top img-fluid zoom-effect">
                </a>
            </div>
        </div>
        @endforeach
    </div>  
</div>

<style>

    @media(max-width:767px){
        .mobile-gallery-landing{
            text-align:center !important;
        }
    }

    .image-container-custom {
        overflow: hidden;
        position: relative;
        width: 100%;
        padding-top: 100%; /* 1:1 Aspect Ratio */
    }

    .image-container-custom img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .row {
        display: flex;
        flex-wrap: wrap; /* Pada layar desktop, gambar-gambar akan ditampilkan dalam satu baris */
    }

    .col-md-2 {
        flex: 0 0 auto; /* Biarkan kolom memiliki lebar yang sesuai dengan kontennya */
        padding-right: 5px; /* Tambahkan sedikit padding untuk memisahkan kolom */
        padding-left: 5px; /* Tambahkan sedikit padding untuk memisahkan kolom */
        white-space: nowrap; /* Hindari pembungkusan baris di dalam kolom */
    }

    @media (max-width: 576px) {
        .col-md-2 {
            flex: 0 0 100%; /* Pada layar mobile, setiap gambar akan menempati lebar penuh */
            max-width: 100%; /* Batasi lebar maksimum kolom */
        }
    }
</style>
