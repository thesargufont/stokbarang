@extends('layout/header')

@section('title', 'Edit Lokasi')
@section('container')

<center>
<h1>Input Data Part</h1>

<div class="container">
    <form action="/masterlokasi/{{ $masterlokasi->id }}" method="post">
        @method('patch')
        @csrf
    <div class="row">
        <div class="">
            <h4 align=left>Kode Barang</h4>
            <input type="text" name="kodelokasi" class="form-control" placeholder="KRPY" required  value="{{ $masterlokasi->kodelokasi }}">
        </div>
        <br>
        <div class="">
            <h4 align=left>Nama barang</h4>
            <input type="text" name="namalokasi" class="form-control"  placeholder="HIT Krapyak" required  value="{{ $masterlokasi->namalokasi }}">
        </div>
        <br>
        <br>
        <br>
        <div class="">
            <button type="submit" class="btn btn-info" name="update">Update</button>
        </div>
</form>
</div>

</center>

@endsection    
