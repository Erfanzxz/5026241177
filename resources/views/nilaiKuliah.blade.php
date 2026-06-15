<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4 text-center">SOAL EAS PEMROGRAMAN WEB (KODE: E5)</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3 text-end">
        <a href="/nilaikuliah/tambah" class="btn btn-primary">Tambah Data</a>
    </div>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaiKuliah as $row)
                @php
                    // 1. Logika menentukan Nilai Huruf berdasarkan NilaiAngka
                    $nilaiAngka = $row->NilaiAngka;
                    $nilaiHuruf = '';

                    if ($nilaiAngka <= 40) {
                        $nilaiHuruf = 'D';
                    } elseif ($nilaiAngka >= 41 && $nilaiAngka <= 60) {
                        $nilaiHuruf = 'C';
                    } elseif ($nilaiAngka >= 61 && $nilaiAngka <= 80) {
                        $nilaiHuruf = 'B';
                    } elseif ($nilaiAngka >= 81) {
                        $nilaiHuruf = 'A';
                    }

                    // 2. Logika menghitung Bobot (Nilai Angka x SKS)
                    $bobot = $nilaiAngka * $row->SKS;
                @endphp
                <tr>
                    <td>{{ $row->ID }}</td>
                    <td>{{ $row->NRP }}</td>
                    <td>{{ $row->NilaiAngka }}</td>
                    <td>{{ $row->SKS }}</td>
                    <td><span class="badge bg-secondary fs-6">{{ $nilaiHuruf }}</span></td>
                    <td>{{ $bobot }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
