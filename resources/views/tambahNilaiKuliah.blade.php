<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Nilai Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Halaman Tambah Data</h4>
                </div>
                <div class="card-body">

                    <form action="/nilaikuliah/store" method="POST">
                        @csrf <div class="mb-3">
                            <label for="nrp" class="form-label">NRP</label>
                            <input type="text" name="nrp" id="nrp" class="form-control" maxlength="6" required placeholder="Contoh: 502521">
                        </div>

                        <div class="mb-3">
                            <label for="nilaiangka" class="form-label">Nilai Angka</label>
                            <input type="number" name="nilaiangka" id="nilaiangka" class="form-control" required placeholder="Contoh: 85">
                        </div>

                        <div class="mb-3">
                            <label for="sks" class="form-label">SKS</label>
                            <input type="number" name="sks" id="sks" class="form-control" required placeholder="Contoh: 3">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="/nilaikuliah" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan Record</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
