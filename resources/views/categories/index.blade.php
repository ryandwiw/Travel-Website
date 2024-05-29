@extends('layouts.admin')

@section('isi')
<div class="mb-1" style="margin-left: 13px;">
    <p class="">
        <a href="" style="text-decoration: none; color: inherit; " >Dashboard</a> /
        <a href="{{route('categories.index')}}" style="text-decoration: none; color: inherit; font-weight:bold; cursor: pointer;">Article Category</a> 

    </p>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4 class="fw-bold text-center">Categories</h4></div>

                <div class="card-body">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create Category</a>

                    <ul class="list-group">
                        @forelse ($categories as $category)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $category->name }}</span>
                                <div class="d-flex">
                                    <a href="{{ route('categories.show', ['category' => $category->slug]) }}" class="btn btn-sm btn-success me-1">Show</a>
                                    <a href="{{ route('categories.edit', ['category' => $category->slug]) }}" class="btn btn-sm btn-info me-1">Edit</a>
                                    <form action="{{ route('categories.destroy', $category->slug) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </li>
                        @empty
                            <li class="list-group-item">No categories found.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
