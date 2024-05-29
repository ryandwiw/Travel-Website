<style>
    .equal-size {
    width: 100%;
    height: auto;
}

.slow-fade-in-up {
        animation-duration: 3s; /* Atur durasi animasi menjadi 1.5 detik */
    }

    
</style>

<div class="container p-4 ">
    <div class="row">
        <h2 class="fw-bold text-center text-primary mb-5 mt-2 slow-anim animate__animated slow-fade-in-up">Our Travel Place</h2>
        @foreach ($tours->take(6) as $index => $tour)
            <div class="col-md-4 mb-3 tour-item " data-index="{{ $index }}">
                <a href="{{ route('tours.show', $tour->slug) }}" style="text-decoration: none;">
                
                    <div class="img-hover-zoom-tours-landing">
                        <img src="{{ asset($tour->foto) }}" class="mb-2 zoom-effect" style="object-fit:cover;" loading="lazy">
                    </div>
                    <h5 style="text-align: center; font-weight:600; margin-top:15px;">{{$tour->nama}}</h5>
                </a>
            </div>
        @endforeach
    </div>
    <hr>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll();
    });

    function revealOnScroll() {
        var items = document.querySelectorAll('.slow-anim');
        items.forEach(function(item) {
            if (isElementInViewport(item)) {
                item.classList.add('animate__zoomIn');
            } 
        });
    }

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
</script>