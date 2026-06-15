<?php

namespace App\Http\Controllers;
use App\Models\nilaiPeserta;
use Illuminate\Http\Request;

class nilaiPesertaController extends Controller
{
    public function index(){
        $nilaiPeserta = nilaiPeserta::orderby('id', 'asc')->get();
        return view('nilaiPeserta', compact('nilaiPeserta'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nopeserta' => 'required|max:5',
            'nilaiteori' => 'required|integer',
            'nilaipraktek' => 'required|integer',
        ]);
        //Menyimpan data ke database menggunakan Eloquent
        NilaiPeserta::create([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);

        //melakukan redirect ke halaman index dengan pesan sukses
        return redirect('/eas')->with('success', 'Data peserta berhasil ditambahkan!');
    }
}

