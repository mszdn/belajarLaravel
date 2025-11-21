<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0"><i class="bi bi-pencil-square"></i> Edit Buku</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('books.update', $book->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label fw-semibold">Judul Buku</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $book->title }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label fw-semibold">Penulis</label>
                                <input type="text" name="author" id="author" class="form-control"
                                    value="{{ $book->author }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="year" class="form-label fw-semibold">Tahun Terbit</label>
                                <input type="number" name="year" id="year" class="form-control"
                                    value="{{ $book->year }}" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('books.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>