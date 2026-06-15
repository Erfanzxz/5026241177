<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    //
    public function index()
    {
        $keranjangBelanja = DB::table('keranjangbelanja')->get();

        return view('indexLatihan', ['keranjangBelanja' => $keranjangBelanja]);
    }

    public function tambah()
    {
        return view('tambahKeranjangBelanjaLatihan');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga
        ]);

        return redirect('/keranjangbelanja');
    }

    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}





}
