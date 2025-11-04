<h2>Edit Siswa</h2>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $student->nama }}" required><br>
    <label>Umur:</label>
    <input type="number" name="umur" value="{{ $student->umur }}" required><br>
    <label>Alamat:</label>
    <input type="text" name="alamat" value="{{ $student->alamat }}" required><br>
    <button type="submit">Update</button>
</form>