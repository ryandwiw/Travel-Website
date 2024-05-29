<style>
    @keyframes fadeInOut {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0.8;
            }
            100% {
                opacity: 1;
            }
        }

        .fade {
            animation: fadeInOut 4s infinite;
        }
</style>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item fade active max-height-image-header">
            <img src="{{ asset('assets/image/Carousel.png') }}" loading="lazy" class="d-block w-100" alt="..." loading="lazy">
            <div class="carousel-caption">
                <div class="traver-text text-center text-shadow">
                    <h4>Great Destinations For</h4>
                    <h1>Creating new Memory</h1>
                </div>
                <div class="search-column text-center">
                    <i class="fas fa-search location-icon"></i>
                    <form action="{{ url('/pencarian') }}" method="GET">

                    <input type="text" class="form-control search-input" placeholder="Cari...">
                    <button type="submit" class="btn btn-primary">Cari</button>
                      </form>
                </div>

            </div>
        </div>
    </div>
</div>

