<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data - Kode Soal nilai_peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm text-center">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Kode Soal nilai_peserta</h1>
            <p class="col-md-8 fs-4 mx-auto">Halaman Pengisian Record Baru</p>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card p-4 shadow-sm">
            <h4 class="mb-4">Form Tambah Data Peserta</h4>

            <form action="/eas/store" method="POST">
                @csrf

                <div class="mb-3 row">
                    <label for="nopeserta" class="col-sm-2 col-form-label">No Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" name="nopeserta" id="nopeserta" class="form-control" maxlength="5" required placeholder="Contoh: 12345">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nilaiteori" class="col-sm-2 col-form-label">Nilai Teori</label>
                    <div class="col-sm-10">
                        <input type="number" name="nilaiteori" id="nilaiteori" class="form-control" min="0" max="100" required placeholder="0 - 100">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nilaipraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                    <div class="col-sm-10">
                        <input type="number" name="nilaipraktek" id="nilaipraktek" class="form-control" min="0" max="100" required placeholder="0 - 100">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-success">Simpan Record</button>
                        <a href="/eas" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
