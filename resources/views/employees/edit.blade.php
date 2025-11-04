<h2>Edit Karyawan</h2>
<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $employee->nama }}" required><br>

    <label>Jabatan:</label>
    <input type="text" name="jabatan" value="{{ $employee->jabatan }}" required><br>

    <label>No HP:</label>
    <input type="text" name="nohp" value="{{ $employee->nohp }}" required><br>

    <button type="submit">Update</button>
</form>