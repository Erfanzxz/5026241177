<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;

class MahasiswaController extends Controller
{
    //
    public function index(){
        return "<h1>Halo, ini adalah method index, dalam controller MahasiswaController</h1>";
    }

    public function biodata(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $mataKuliah = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
    	return view('biodata', ['nama' => $nama, 'umur' => $umur, 'mataKuliah' => $mataKuliah]);
    }
}
