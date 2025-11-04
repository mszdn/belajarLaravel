<h2>Daftar Karyawan</h2>
<a href="{{ route('employees.create') }}">Tambah Karyawan</a>

@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<table border="1" cellpadding="5">
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
                <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>