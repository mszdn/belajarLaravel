@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <div style="margin-right: 80px;">


        <h2>Daftar Siswa</h2>
        <a class="btn btn-success mb-2" href="{{ route('students.create') }}">Tambah Siswa</a>

        @if ($message = Session::get('success'))
            <p>{{ $message }}</p>
        @endif

        <table class="table table-dark table-hover">
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->umur }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('students.edit', $student->id) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection