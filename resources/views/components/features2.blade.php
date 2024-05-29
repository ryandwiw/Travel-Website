<div class=" container-ani container mb-5 margin-top-tablet" id="animated-section">
    <div class="row">
        <div class="col-md-6">
            <div class="text-end d-lg-none d-md-none mb-5">

                <h3 class="fw-bold my-element" style="margin-left: 40px;">Temukan Lebih Banyak Petualangan</h3>
            </div>

            <div class="text-center">
                <div class="img-hover-zoom2 box-image-feature">
                    <img src="{{ asset('assets/image/img2.jpg') }}" alt="Gambar_Asset_Travel02"
                        class="" loading="lazy">
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold d-none d-lg-block d-md-block " style="margin-left: 40px;">Temukan Lebih Banyak
                Petualangan
            </h3>
            <p class="mt-3 mb-3 margin-left-feature" style="text-align: justify !important;">"Bergabunglah dengan
                Petualangan Kami! Ikuti kami untuk
                update eksklusif, tips perjalanan, dan penawaran spesial. Gabung dengan komunitas kami dan bagikan
                pengalaman seru Anda. Klik ikon media sosial di bawah ini dan mari kita terhubung!"</p>
            <div class="text-start mobile-icon-feature" style="margin-left: 33px;">

                <a href="#" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
                <a href="#" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="btn btn-danger"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>

            </div>
        </div>
    </div>
    <hr class="mb-3 margin-top-feature" style="margin-top:20px;">
</div>

<style>

    @media(min-width:979px) {
        .img-hover-zoom2 {
            height: 280px;
            width: 470px;
            border-radius: 5px;
            overflow: hidden;
            /* [1.2] Hide the overflowing of child elements */
        }

        /* [2] Transition property for smooth transformation of images */
        .img-hover-zoom2 img {
            height: 290px; width:500px; object-fit:cover;
            transform-origin: 50% 65%;
            transition: transform 5s, filter 3s ease-in-out;
        }

        /* [3] Finally, transforming the image when container gets hovered */
        .img-hover-zoom2:hover img {
            filter: brightness(100%);
            transform: scale(1.3);
        }


        .margin-top-feature {
            margin-top: 70px !important;
        }

        .margin-left-feature {
            margin-left: 33px;
        }

        .box-image-feature {
            box-shadow: -16px 18px 15px 8px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: -16px 18px 15px 8px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -16px 18px 15px 8px rgba(0, 0, 0, 0.75);
        }
    }

    @media(min-width:768px) and (max-width:1024px){

        .margin-top-tablet{
            margin-top:60px !important;
        }
        .img-hover-zoom2 {
            height: 280px !important;
            width: 100% !important;
            border-radius: 5px;
            overflow: hidden;
            /* [1.2] Hide the overflowing of child elements */
        }

        /* [2] Transition property for smooth transformation of images */
        .img-hover-zoom2 img {
            height: 290px !important; 
            width:100% !important; 
            object-fit:cover;
            transform-origin: 50% 65%;
            transition: transform 5s, filter 3s ease-in-out;
        }

        /* [3] Finally, transforming the image when container gets hovered */
        .img-hover-zoom2:hover img {
            filter: brightness(100%);
            transform: scale(1.3);
        }
    }



    @media(max-width:767px) {

        .img-hover-zoom2 {
            height: 290px;
            width: 345px;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 50px;
            margin-left: 20px !important;

            box-shadow: -5px 15px 11px 7px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: -5px 15px 11px 7px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -5px 15px 11px 7px rgba(0, 0, 0, 0.75);
            /* [1.2] Hide the overflowing of child elements */
        }

        /* [2] Transition property for smooth transformation of images */
        .img-hover-zoom2 img {
            height: 290px;
            width: 345px;
            transform-origin: 50% 65%;
            transition: transform 5s, filter 3s ease-in-out;
        }

        /* [3] Finally, transforming the image when container gets hovered */
        .img-hover-zoom2:hover img {
            filter: brightness(100%);
            transform: scale(1.3);
        }


        .mobile-icon-feature {
            text-align: center !important;
            margin-left: 0 !important;
            margin-top: 30px;
        }

       
    }
</style>

<script>
function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to add animation class when element is in viewport
        function animateOnScroll() {
            var animatedElement = document.getElementById('animated-section');
            if (isInViewport(animatedElement)) {
                animatedElement.classList.add('animate__animated', 'animate__pulse');
                // Remove scroll event listener after animation applied
                window.removeEventListener('scroll', animateOnScroll);
            }
        }

        // Add scroll event listener to trigger animation
        window.addEventListener('scroll', animateOnScroll);
</script>