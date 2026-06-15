@extends('Folder pra EAS.template')

@section('title', 'Latihan Keranjang Belanja')

@section('konten')
    <center>
        <h1>Daftar Keranjang Belanja</h1>
    </center>

    <a href="/keranjangbelanja/tambah" class="btn btn-primary mb-3">Tambah Data</a>
    <center>
        <br>
        <br>






        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach(keranjangBelanja as $kb)
                <tr>
                    <td>{{ $kb->ID }}</td>
                    <td>{{ $kb->kodeBarang }}</td>
                    <td>{{ $kb->jumlah }}</td>
                    <td>{{ $kb->Harga }}</td>
                    <td>
                        <a href="/tambahkeranjangbelanja/beli/{{ $kb->id }}" class="btn btn-warning">Beli</a>
                        <a href="/tambahkeranjangbelanja/batal/{{ $kb->id }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
    </center>
