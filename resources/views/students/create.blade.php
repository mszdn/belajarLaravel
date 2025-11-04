<h2>Tambah Siswa</h2>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama" required><br>
    <label>Umur:</label>
    <input type="number" name="umur" required><br>
    <label>Alamat:</label>
    <input type="text" name="alamat" required><br>
    <button type="submit">Simpan</button>
</form>
