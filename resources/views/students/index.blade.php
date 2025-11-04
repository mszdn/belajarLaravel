<h2>Daftar Siswa</h2>
<a href="{{ route('students.create') }}">Tambah Siswa</a>

@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<table border="1" cellpadding="5">
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
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>