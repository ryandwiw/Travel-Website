@extends('layouts.guest')

@section('isi')
    <div class="container" style="margin-top: 70px;">
        <div class="text-center fw-bolder  about-us-font">
            <h1>Reviews</h1>
            <h2>Travel Tours</h2>
        </div>
        <hr class="hr-bold">

        <div class="mb-3 img-hover-zoom-about">
            <img src="{{ asset('assets/image/img2.jpg') }}" alt="Image-About-Us">
        </div>

        <div class="center-text">
            <p>Welcome to <b>Travel Explorers</b>, your ultimate gateway to discovering the wonders of the world. We are a
                passionate team of travelers dedicated to helping you create unforgettable experiences wherever you go.</p>

            <p>Travel Explorers is more than just a website; it's a community of adventure seekers, culture enthusiasts, and
                wanderers. Our mission is to inspire and empower you to explore new destinations, connect with diverse
                cultures, and enrich your life through travel.</p>

            <p>With our extensive collection of travel guides, tips, and resources, we aim to make your journey smoother and
                more enjoyable. Whether you're planning a solo backpacking trip, a family vacation, or a romantic getaway,
                we've got you covered.</p>

            <p>At Travel Explorers, we believe in the transformative power of travel. It opens our minds, broadens our
                perspectives, and reminds us of the beauty and diversity of our world. Every trip is an opportunity for
                growth, learning, and adventure.</p>

            <p>Our team consists of seasoned travelers, travel bloggers, and industry experts who share a common passion for
                exploration. We're constantly on the lookout for the latest travel trends, insider tips, and hidden gems to
                share with you.</p>

            <p>From stunning natural landscapes to vibrant urban centers, our destination guides cover it all. We provide
                detailed information on attractions, accommodations, dining options, and transportation to help you plan the
                perfect itinerary.</p>

            <p>At Travel Explorers, we understand the importance of responsible travel. We promote sustainable tourism
                practices and encourage our community to minimize their environmental impact, respect local cultures, and
                support the communities they visit.</p>

            <p>Join us on social media to connect with fellow travelers, share your adventures, and stay updated on the
                latest travel news and promotions. We love hearing from our community and seeing the world through your
                eyes.</p>

            <p>At Travel Explorers, we're committed to providing you with the tools and inspiration you need to embark on
                your next great adventure. Whether you're dreaming of exploring ancient ruins, relaxing on pristine beaches,
                or trekking through remote wilderness, we're here to help you turn your travel dreams into reality.</p>

            <p>Thank you for choosing Travel Explorers as your trusted travel companion. We look forward to helping you
                discover the world and create memories that will last a lifetime.</p>

            <p>Start exploring with Travel Explorers today and let the journey begin!</p>

        </div>
        <div>
            <hr>
            <div class="text-center">
                <div class="text-center">
                    <h5 class="fw-bold mb-3">Follow Us</h5>
                </div>

                <a href="#" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
                <a href="#" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="btn btn-danger"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>

            </div>
        </div>
        <hr class="hr-bold">
    </div>

    <style>
        
        @media(max-width:767px){
            .img-hover-zoom-about {
            height: 300px !important;
            width: 100%;
            overflow: hidden;
        }

        /* [2] Transition property for smooth transformation of images */
        .img-hover-zoom-about img {
            transition: transform .3s ease;
            height: 300px !important;
            width: 100%;
        }

        }

        .img-hover-zoom-about {
            height: 430px;
            width: 100%;
            /* [1.1] Set it as per your need */
            overflow: hidden;
            /* [1.2] Hide the overflowing of child elements */
        }

        /* [2] Transition property for smooth transformation of images */
        .img-hover-zoom-about img {
            transition: transform .3s ease;
            height: 430px;
            width: 100%;
        }

        /* [3] Finally, transforming the image when container gets hovered */
        .img-hover-zoom-about:hover img {
            transform: scale(1.07);
        }

        .hr-bold {
            border: none;
            /* Menghapus border bawaan */
            border-top: 5px solid #333;
            /* Mengatur border atas dengan ketebalan 2px dan warna hitam */
        }

        .about-us-font {
            font-family: "Anton", sans-serif;
            font-weight: 500;
            font-style: normal;

        }

        .center-text {
            text-align: justify;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            color: rgb(82, 82, 82);
        }
    </style>
@endsection
