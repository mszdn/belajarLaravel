<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>

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
                        <h5 class="mb-0">Tambah Bukcjdncjdncjsncjsncu</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('books.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label fw-semibold">Judul Buku</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Masukkan judul buku" required>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label fw-semibold">Penulis</label>
                                <input type="text" name="author" id="author" class="form-control"
                                    placeholder="Masukkan nama penulis" required>
                            </div>

                            <div class="mb-3">
                                <label for="year" class="form-label fw-semibold">Tahun Terbit</label>
                                <input type="number" name="year" id="year" class="form-control"
                                    placeholder="Masukkan tahun terbit" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('books.index') }}" class="btn btn-secondary">
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