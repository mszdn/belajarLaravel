<h2>Tambah Karyawan</h2>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama" required><br>

    <label>Jabatan:</label>
    <input type="text" name="jabatan" required><br>

    <label>No HP:</label>
    <input type="text" name="nohp" required><br>

    <button type="submit">Simpan</button>
</form>