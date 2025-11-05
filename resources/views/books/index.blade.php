@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2 class="mb-4">📚 Daftar Buku</h2>

    <a href="{{ route('books.create') }}" class="btn btn-success mb-3">Tambah Buku</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection