<!-- resources/views/categories/create.blade.php -->

@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a href="{{route('categories.index')}}" style="text-decoration: none; color: inherit; ">Article Category</a> /
        <a class="fw-bold" style="text-decoration: none; color: inherit; cursor:text; ">Create</a>

    </p>
</div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4 class="fw-bold text-center">Create Category</h4></div>

                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="mb-3">Name Category</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-3">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
