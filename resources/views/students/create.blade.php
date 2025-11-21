<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Tambah Siswa</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nama" class="form-label fw-semibold">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Masukkan nama siswa" required>
                            </div>

                            <div class="mb-3">
                                <label for="umur" class="form-label fw-semibold">Umur</label>
                                <input type="number" name="umur" id="umur" class="form-control"
                                    placeholder="Masukkan umur siswa" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control"
                                    placeholder="Masukkan alamat siswa" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('students.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>