<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// PENTING: Tambahkan ini agar DB query builder bisa digunakan
use Illuminate\Support\Facades\DB;

class nilaiKuliahController extends Controller
{
    // 1. Menampilkan halaman index (Tabel Data)
    public function index(){
        $nilaiKuliah = DB::table('nilaikuliah')->get();
        return view('nilaikuliah', compact('nilaiKuliah'));
    }

    // 2. Menampilkan halaman form tambah data
    public function tambahnilaikuliah(){
        return view('tambahnilaikuliah');
    }

    // 3. Memproses penyimpanan data baru dari form
    public function store(Request $request){
        // Validasi input data dari user
        $request->validate([
            'nrp' => 'required|max:6',
            'nilaiangka' => 'required|integer',
            'sks' => 'required|integer',
        ]);

        // Insert ke database
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks,
        ]);

        // Redirect kembali ke halaman index sesuai instruksi soal nomor 4
        return redirect('/nilaikuliah')->with('success', 'Data berhasil ditambahkan!');
    }
}
