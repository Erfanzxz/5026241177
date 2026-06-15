<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai Peserta</title>
</head>
<body>
    <body class="container mt-5">

    <h2 class="mb-4 text-center">Nilai Peserta</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3 text-end">
        <a href="/eas/tambah" class="btn btn-primary">Tambah Data</a>
    </div>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>No Peserta </th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata Rata</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaiPeserta as $np)
                @php
                    // 1. Logika menentukan Status berdasarkan Rata Rata
                    $nilaiRataRata = ($np->nilaiteori + $np->nilaipraktek) / 2;

                    if ($nilaiRataRata >= 75) {
                        $status = 'Lulus';
                    } else {
                        $status = 'Tidak Lulus';
                    }
                    $RataRata = ($np->nilaiteori + $np->nilaipraktek) / 2;
                @endphp
                <tr>
                    <td>{{ $np->ID }}</td>
                    <td>{{ $np->nopeserta }}</td>
                    <td>{{ $np->nilaiteori }}</td>
                    <td>{{ $np->nilaipraktek }}</td>
                    <td>{{ $RataRata }}</td>
                    <td>{{ $status }}</td>
                    <td><span class="badge bg-secondary fs-6">{{ $status }}</span></td>
                    <td>{{ $data->nama }}</td>
                    @if($nilaiRataRata >= 75)
                        <td><span class="badge bg-green-500 text-white font-bold">Lulus</span></td>
                    @else
                        <td><span class="badge bg-red-500 text-white font-bold">Tidak Lulus</span></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</body>
</html>
