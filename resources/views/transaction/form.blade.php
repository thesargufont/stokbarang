@extends('layout/header')

@section('title', 'Transaction')
@section('container')

<center>
<h1>Form Data Transaksi Stock</h1>

<div class="container">
    <form action="/transaction/update" method="POST">
        @csrf
    <div class="row">
        <div class="">
            <h4 align=left>Jenis Transaksi</h4>
            <select name="um" class="form-control" >
                <option value="Masuk" @isset($um) @if ($um === 'Masuk')
                                selected @endif @endisset>Stock Masuk</option>
                <option value="Keluar" @isset($um) @if ($um === 'Keluar')
                                selected @endif @endisset>Stock Keluar</option>
            </select>
        </div>
        <br>
        <div class="">
            <h4 align=left>Lokasi</h4>
            <input type="text" name="kodelokasi" class="form-control"  placeholder="KRPY" required  value="{{ old('kodelokasi') ?? $kodelokasi ?? '' }}">
        </div>
        <div class="">
            <h4 align=left>Kode Barang</h4>
            <input type="text" name="kodebarang" class="form-control"  placeholder="ABC-00000-000" required  value="{{ old('kodebarang') ?? $kodebarang ?? '' }}">
        </div>
        <div class="">
            <h4 align=left>Nama Barang</h4>
            <input type="text" name="namabarang" class="form-control"  placeholder="Kapasitor" required  value="{{ old('namabarang') ?? $namabarang ?? '' }}">
        </div>
        <div class="">
            <h4 align=left>Tanggal Transaksi</h4>
            <input type="date" name="tanggal" class="form-control"  placeholder="" required  value="{{ old('tanggal') ?? $tanggal ?? '' }}">
        </div>
        <div class="">
            <h4 align=left>Quantity</h4>
            <input type="number" name="quantity" class="form-control"  placeholder="1000" required  value="{{ old('quantity') ?? $quantity ?? '' }}">
        </div>
        <div class="">
            <h4 align=left>Satuan</h4>
            <input type="text" name="um" class="form-control"  placeholder="HIT Krapyak" required  value="{{ old('um') ?? $um ?? '' }}">
        </div>
        <br>
        <br>
        <br>
        <div class="">
            <button type="submit" class="btn btn-info" name="submit">Input</button>
        </div>
</form>
</div>

</center>

@endsection    
