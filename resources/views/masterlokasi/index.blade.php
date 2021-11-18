@extends('layout/header')

@section('title', 'Master Lokasi')
@section('container')

<div align="right" class="container">
    <a href="/masterlokasi/forminput" class="btn btn-primary">Input</a>
</div>

<center>

    <div class="container">
        <form action="/masterlokasi/search" method="POST">
            @csrf
        <div class="row">
            <div class="">
                <h4 align=left>Pencarian Lokasi</h4>
                <input type="text" name="namalokasi" class="form-control" placeholder="Silahkan Masukkan Nama Lokasi, Misal HIT Kudus"  value="{{ old('namalokasi') ?? $input ?? '' }}">
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
                <h1 class="mt-3">Data Master Lokasi</h1>
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Lokasi</th>
                            <th scope="col">Nama Lokasi</th>
                            <th scope="col">Update</th>
                            <th scope="col">Dalete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masterlokasi as $data) 
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $data->kodelokasi}}</td>
                            <td>{{ $data->namalokasi}}</td>
                            <td>
                                <a href="/masterlokasi/{{ $data->id }}" class="btn btn-info">edit</a>
                            </td>
                            <td>
                                <form action="/masterlokasi/{{ $data->id }}" method="post"  class="d-inline">
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


