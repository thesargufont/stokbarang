<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>Sistem Aplikasi Stok Barang</b>
                <hr><br>
                {{-- @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                </div>
                @endif --}}
                {{-- <form action="{{ route('actionlogin') }}" method="post"> --}}
                <h4>Silahkan Melakukan Pengisian Data :</h4>
                <form action="" method="post">
            @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="username" class="form-control" placeholder="username" required="">
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
            </form>
        </div>
    </div>
</body>
</html>