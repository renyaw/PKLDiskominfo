<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masuk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color:#87CEFA;">
        <div class="container">
            <a class="navbar-brand" style="">
                <img src="img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border rounded-4" href="daftar">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Context -->
    <div class="container h-100 pt-4" style="background-image: url('img/backgroundv2.jpg'); background-size: cover; background-attachment: fixed; max-width:unset;">
        {{-- Alert from register --}}
        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show p-4" role="alert">
                {{session('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- end alert --}}

         {{-- Alert from login --}}
        @if(session()->has('Lerror'))
            <div class="alert alert-danger alert-dismissible fade show p-4" role="alert">
                {{session('Lerror')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
         {{-- end alert --}}
      <div class="row align-items-center h-100">
        <div class="col-6 mx-auto">
          <div class="card p-4 shadow-lg" style="border-radius: 1rem; border-color:#87CEFA; border-width: 3px;">
            <div class="container text-center mt-3">
              <h2><b>SIP MAS</b></h2>
              <img src="img/logo.png" alt="Logo" width="170" height="115" class="d-inline-block" />
              <br />
              <br />
              <h3><b>MASUK</b></h3>
            </div>
            <br />

    <!--FORM LOGIN-->
            <div class="container">


              <div class="form-control bg-color=white shadow-lg" style="border-radius: 1rem; border-color:#87CEFA; border-width: 2px;">
                <br />
                <form name="login" method="POST" autocomplete="off" action="/login">
                  @csrf
                  <div class="mb-3">
                    <label for="username" class="form-label">
                        <b>Username</b>
                    </label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" autofocus>
                @error('Username')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                </div>
                  <div class="mb-3">
                    <label for="password" class="form-label" required>
                        <b>Kata Sandi</b>
                    </label>
                    <input type="password" class="form-control" id="password" name="password"/>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end pb-3">
                    <a href="#" >Lupa kata sandi?</a>
                  </div>
                  <div class="d-grid gap-2 mx-4" >
                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Masuk"/>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                  <a>Belum punya akun?</a>
                  <a href="daftar" >Daftar disini</a>
                  </div>
                </form>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Context -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
