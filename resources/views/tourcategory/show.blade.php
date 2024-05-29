@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="{{route('dashboard')}}" style="text-decoration: none; color: inherit; ">Dashboard</a> /
        <a href="{{route('tourcategories.index')}}" style="text-decoration: none; color: inherit; ">Tours Category</a> /
        <a style="text-decoration: none;color:inherit;cursor:text; font-weight:bold;">{{$tourCategory->nama_kategori}}</a>
    </p>
</div>

<div class="container mt-3">
    <hr>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div>
            <h2 class="text-center fw-bold mb-4">{{ $tourCategory->nama_kategori }}</h2>
            <div class="text-center">

                <img src="{{ asset($tourCategory->foto_tour) }}" alt="Foto Tour" style="max-width: 530px; height:auto;">
            </div>

                
            <table class="table table-primary mt-3" style="margin-left:65px; border-radius: 30px; overflow:hidden; width: 80%;" >
                <tbody >
                    <tr>
                        <td><i class="fa-solid fa-chart-line"></i> Aktivitas  :</td>
                        <td>{{ $tourCategory->activity }}</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-calendar"></i> Start :</td>
                        <td>{{ $tourCategory->start }}</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-clock"></i> Durasi :</td>
                        <td>{{ $tourCategory->duration }}</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-chart-line"></i> Harga :</td>
                        <td>{{ $tourCategory->price }}</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-calendar"></i> Relation Article :</td>
                        <td>{{ $tourCategory->tourArticle->judul_tour_article }}</td>
                    </tr>
                </tbody>
            </table>
            
            
        
                
 
            
            </div>
           

    </div>
</div>
@endsection
