@extends('layout/header')

@section('title', 'Master Lokasi')
@section('container')

<div align="right" class="container">
    <a href="/masterbahan/input" class="btn btn-primary">Input</a>
</div>

<center>

    <div class="container">
        <form action="/masterbahan/search" method="POST">
            @csrf
        <div class="row">
            <div class="">
                <h4 align=left>Pencarian Part</h4>
                <input type="text" name="part_number" class="form-control" placeholder="Silahkan Masukkan Kode Lokasi, Misal KRPY"  value="{{ old('part_number') ?? $input ?? '' }}">
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
                                <a href="/masterbahan/{{ $data->id }}" class="btn btn-info">edit</a>
                            </td>
                            <td>
                                <form action="/masterbahan/{{ $data->id }}" method="post"  class="d-inline">
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


