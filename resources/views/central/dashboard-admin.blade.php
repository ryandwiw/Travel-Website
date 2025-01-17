@extends('layouts.admin')

@section('isi')
    <div class="mb-4">
        <p class="">
            <a href="{{ route('dashboard') }}" style="text-decoration: none; color: inherit; "
                onclick="pindahHalaman()">Dashboard</a>
        </p>
        <h3 class="text-center">Travel Administrator</h3>
    </div>

    <div class="container mt-3">

        <div class="row">
            <div class="col-12 col-md-12 d-flex">
                <div class="card flex-fill border-0 illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-8">
                                <div class="p-3 m-1">
                                    <h4>Selamat Datang Kembali, </h4>
                                    <p class="mb-0">Admin Travel</p>
                                </div>
                            </div>
                            <div class="col-4 align-self-end text-end">
                                <img src="{{ asset('assets/image/customer-support.jpg') }}" class="img-fluid illustration-img"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
        </div>



        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tours</h5>
                        <p class="card-text">Total: {{ $tours->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gallery</h5>
                        <p class="card-text">Total: {{ $gallerys->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Articles</h5>
                        <p class="card-text">Total: {{ $artikels->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tour Category</h5>
                        <p class="card-text">Total: {{ $tourCategories->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tour Articles</h5>
                        <p class="card-text">Total: {{ $tourArticles->count() }}</p>
                    </div>
                </div>
            </div>
        </div>



        





    </div>
@endsection
