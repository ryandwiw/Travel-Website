
<div class="modal fade p-0" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-light" > 
        <div class="modal-header bg-primary"> 
          <h1 class="modal-title text-light fs-5" id="searchModalLabel">Cari </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
        </div> 
        <div class="modal-body">
          <form action="{{ url('/pencarian') }}" method="GET">
            <div class="mb-3">
              <label for="searchInput" class="form-label">Kata Kunci :</label>
              <input type="text" class="form-control" id="searchInput" name="query" placeholder="Masukkan kata kunci">
            </div>
            <div class="modal-footer" >
              <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn text-light bg-primary">Cari</button>
  
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="navbar-brand text-center d-none d-lg-block navbar-desktop-icon">
            Travel
        </div>

        {{-- <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        {{-- <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                viewBox="0 0 30 30">
                <path
                    d="M4 7h22a2 2 0 0 1 0 4H4a2 2 0 0 1 0-4zm0 8h22a2 2 0 0 1 0 4H4a2 2 0 0 1 0-4zm0 8h22a2 2 0 0 1 0 4H4a2 2 0 0 1 0-4z" />
            </svg>
        </button> --}}

        <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <a class="navbar-brand order-3 d-lg-none" href="#" style="margin-left: 20px;">
            Travel
        </a>

        <a class="navbar-brand order-5 d-lg-none ml-auto" data-bs-toggle="modal" id="searchIcon" data-bs-target="#searchModal" style="cursor: pointer;">
            <i class="fas fa-search"></i>
        </a>

        <div class="collapse navbar-collapse justify-content-center order-lg-2" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tours.index')}}">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('artikels.index')}}">Holiday Island</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('central.about')}}">About Us</a>
                    <div class="d-lg-none" style="color: white;">
                        <hr>
                    </div>
                </li>
                <div>
                    <div class="social-links">
                        <ul class="nav">

                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="#"><i class="fab fa-google"></i></a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="#"><i class="fab fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>

        <ul class="navbar-nav d-none d-lg-flex ml-auto order-lg-last">
            <li class="nav-item ">
                <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#"><i class="fab fa-google"></i></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#"><i class="fab fa-whatsapp"></i></a>
            </li>
            <li class="nav-item" style="cursor: pointer;">
                <a class="nav-link" data-bs-toggle="modal" id="searchIcon" data-bs-target="#searchModal"><i class="fas fa-search"></i></a>
            </li>
        </ul>

    </div>
</nav>
