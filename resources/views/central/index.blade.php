@extends('layouts.guest')

@section('isi')
  
@include('components.header-image')
{{-- @include('components.statistics') --}}

{{-- @include('components.test') --}}






@include('components.product-image')

@include('components.blog')

@include('components.why-choose')
@include('components.features2')


{{-- @include('components.about-us') --}}
@include('components.gallery-product') 

@endsection

