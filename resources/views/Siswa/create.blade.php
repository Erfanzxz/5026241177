@extends('EAS.template')
@section('title', 'Data Siswa')
@section('konten')


    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <br>
    <br />


    <div class="card">
        <div class="card-header">
            Tambah Data Siswa
        </div>

        <div class="card-body">

            <br />


            <form action="{{ route('siswa.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" maxlength="10" value="{{ old('NRP') }}"
                            class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" id="Nama" maxlength="20" value="{{ old('Nama') }}"
                            class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="Kelas" id="Kelas" maxlength="5" value="{{ old('Kelas') }}"
                            class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="TanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label><br>
                    <div class="col-sm-10">
                        <input type="date" name="TanggalLahir" id="TanggalLahir" value="{{ old('TanggalLahir') }}"
                            class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

                    <br />

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <a href="{{ route('siswa.index') }}" class="btn btn-info">Kembali</a>
                    </div>
                </div>

            </form>





            <script>
                function validasiForm() {
                    let nrp = document.getElementById('NRP').value.trim();
                    let nama = document.getElementById('Nama').value.trim();
                    let kelas = document.getElementById('Kelas').value.trim();
                    let tanggal = document.getElementById('TanggalLahir').value;

                    if (nrp === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "NRP wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (nrp.length > 10) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "NRP maksimal 10 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (nama === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Nama wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (nama.length > 20) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Nama maksimal 20 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (kelas === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Kelas wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (kelas.length > 5) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Kelas maksimal 5 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (tanggal === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Tanggal lahir wajib diisi",
                            icon: "error"
                        });
                        return false;

                    }

                    return true;
                }
            </script>
        @endsection
