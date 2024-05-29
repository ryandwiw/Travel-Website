<!-- resources/views/categories/edit.blade.php -->

@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a href="{{route('categories.index')}}" style="text-decoration: none; color: inherit; ">Article Category</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">{{$category->name}}</a>

    </p>
</div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4 class="text-center fw-bold">Edit Category</h4></div>

                    <div class="card-body">
                        <form action="{{ route('categories.update', $category->slug) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control mt-3" value="{{ $category->name }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3 mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
