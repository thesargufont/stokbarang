@extends('layout/header')

@section('title', 'Input Lokasi')
@section('container')

<center>
<h1>Input Data Part</h1>

<div class="container">
    <form action="/masterlokasi/input" method="POST">
        @csrf
    <div class="row">
        <div class="">
            <h4 align=left>Kode Lokasi</h4>
            <input type="text" name="kodelokasi" class="form-control" placeholder="KRPY" required  value="{{ old('kodelokasi') ?? $kodelokasi ?? '' }}">
        </div>
        <br>
        <div class="">
            <h4 align=left>Nama Lokasi</h4>
            <input type="text" name="namalokasi" class="form-control"  placeholder="HIT Krapyak" required  value="{{ old('namalokasi') ?? $namalokasi ?? '' }}">
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
