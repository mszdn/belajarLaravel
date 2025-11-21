@extends('layouts.app')

@section('title', 'Daftar Karyawan')

@section('content')

    <div style="margin-right: 80px;">
        <h2>Daftar Karyawan</h2>
        <a class="btn btn-success mb-2" href="{{ route('employees.create') }}">Tambah Karyawan</a>

        @if ($message = Session::get('success'))
            <p>{{ $message }}</p>
        @endif

        <table class="table table-dark table-hover">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->nama }}</td>
                    <td>{{ $employee->jabatan }}</td>
                    <td>{{ $employee->nohp }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline">
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