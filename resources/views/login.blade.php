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
    <center>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center"><b>Registrasi Sistem Aplikasi Stok Barang</b>
        <br><hr> 

         @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

            <main class="form-signin">
                <h4 align="left" class="">Silahkan Login :</h4>
                <form action="/login" method="post">
                  @csrf
                  <div class="form-floating">
                      <label for="username"></label>
                    <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username"
                     placeholder="username" required value={{ old('username') }}>
                    @error('username')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="password" name="password"class="form-control @error('password') is-invalid
                    @enderror"
                    id="password" placeholder="Password">
                    <label for="password"></label>
                    @error('password')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                    @enderror
                  </div>

                  <button type="submit" class="btn btn-primary btn-block">Log In</button>
                </form>
              </main>
        </div>
    </div>
        <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>
    </center>
</body>
</html>