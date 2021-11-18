@extends('layout/header')

@section('title', 'Form Edit')
@section('container')

<center>
<h1>Input Data Part</h1>

<div class="container">
    <form action="/masteritem/{{ $masteritem->id }}" method="post">
        @method('patch')
        @csrf
    <div class="row">
        <div class="">
            <h4 align=left>Kode Barang</h4>
            <input type="text" name="kodebarang" class="form-control" placeholder="ABC-00000-000" required  value="{{ $masteritem->kodebarang }}">
        </div>
        <br>
        <div class="">
            <h4 align=left>Nama barang</h4>
            <input type="text" name="namabarang" class="form-control"  placeholder="Masukkan Nama" required  value="{{ $masteritem->namabarang }}">
        </div>
        <br>
        <div class="">
            <h4 align=left>UM</h4>
            <select name="um" class="form-control" >
                <option value="EA" @isset($um) @if ($um === 'EA')
                                selected @endif @endisset>EA - Each</option>
                <option value="BX" @isset($um) @if ($um === 'BX')
                                selected @endif @endisset>BX - Box</option>
                <option value="CTN" @isset($um) @if ($um === 'CTN')
                                selected @endif @endisset>CTN - Carton</option>
                <option value="RL" @isset($um) @if ($um === 'RL')
                                selected @endif @endisset>RL - Roll</option>
                <option value="SQFT" @isset($um) @if ($um === 'SQFT')
                                selected @endif @endisset>SQFT - Square ft</option>
            </select>
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
