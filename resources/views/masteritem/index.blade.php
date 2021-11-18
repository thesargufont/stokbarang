@extends('layout/header')

@section('title', 'Master Bahan')
@section('container')

<div align="right" class="container">
    <a href="/masteritem/forminput" class="btn btn-primary">Input</a>
</div>

<center>

    <div class="container">
        <form action="/masteritem/search" method="POST">
            @csrf
        <div class="row">
            <div class="">
                <h4 align=left>Pencarian Part</h4>
                <input type="text" name="kodebarang" class="form-control" placeholder="Silahkan Masukkan Kode Barang, Misal RAW-01001-001"  value="{{ old('kodebarang') ?? $input ?? '' }}">
            </div>
        </br>
            <div class="">
                <button type="submit" class="btn btn-info" name="submit">Search</button>
            </div>
        </form>
    </br>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Data Bahan Baku</h1>
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">UM</th>
                            <th scope="col">Update</th>
                            <th scope="col">Dalete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masteritem as $data) 
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $data->kodebarang}}</td>
                            <td>{{ $data->namabarang}}</td>
                            <td>{{ $data->um}}</td>
                            <td>
                                <a href="/masteritem/{{ $data->id }}" class="btn btn-info">edit</a>
                            </td>
                            <td>
                                <form action="/masteritem/{{ $data->id }}" method="post"  class="d-inline">
                                    @method('delete')
                                    @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</center>
@endsection    


