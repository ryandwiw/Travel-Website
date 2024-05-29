
@extends('layouts.admin')

@section('isi')

    <h1>Edit Komentar</h1>


    <form action="{{ route('komens.update', $komen->id) }}" method="post" id="editForm">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" value="{{ $komen->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" value="{{ $komen->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="isi_komentar" class="form-label">Komentar:</label>
            <textarea name="isi_komentar" rows="4" class="form-control" required>{{ $komen->isi_komentar }}</textarea>
        </div>

        <button type="button" class="btn btn-primary" >Perbarui Komentar</button>
    </form>

@endsection
