<!-- resources/views/comments/index.blade.php -->

@extends('layouts.admin')

@section('isi')
   
    <h2>Daftar Komentar</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Isi Komentar</th>
                    <th>Artikel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($komens as $comment)
                    <tr>
                        <td>{{ $comment->nama }}</td>
                        <td>{{ $comment->email }}</td>
                        <td>{{ $comment->isi_komentar }}</td>
                        <td>
                            <a href="{{ route('articles.show', $comment->article_id) }}">
                                {{ $comment->article->judul }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('komens.edit', $comment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('komens.destroy', $comment->id) }}" method="post" class="d-inline"
                                id="deleteForm">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm"
                                    onclick="deleteContent()">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Tidak ada komentar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
