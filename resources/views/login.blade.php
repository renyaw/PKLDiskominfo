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


<nav class="navbar navbar-expand-lg navbar-transparent" style="background-color:#87CEFA;">
    <div class="container">
      <a class="navbar-brand" rel="tooltip" data-placement="bottom" target="_blank">
        <img src="img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">

        <ul class="navbar-nav navbar-nav-hover ms-auto">

          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" href="/">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              Beranda
            </a>
          </li>

          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              Layanan
              <img src="../assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
              <div class="d-none d-lg-block">
                <a href="login" class="dropdown-item border-radius-md">
                    <span>Surat Keterangan Tidak Mampu</span>
                  </a>
                  <a href="login" class="dropdown-item border-radius-md">
                    <span>Surat Keterangan Domisili</span>
                  </a>
                  <a href="login" class="dropdown-item border-radius-md">
                    <span>Surat Pengantar Kredit</span>
                  </a>
                  <a href="login" class="dropdown-item border-radius-md">
                    <span>Kumpulan Berkas</span>
                  </a>
              </div>
              <div class="row d-lg-none">
                <div class="col-md-12">
                  <div class="d-flex mb-2">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                    </div>
                  </div>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-laptop text-gradient text-primary"></i>
                    </div>
                  </div>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-badge text-gradient text-primary"></i>
                    </div>
                  </div>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-notification-70 text-gradient text-primary"></i>
                    </div>
                  </div>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-app text-gradient text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              Akun
              <img src="../assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                <div class="d-none d-lg-block">
                    <a href="login" class="dropdown-item border-radius-md">
                        <span>Masuk</span>
                      </a>
                      <a href="daftar" class="dropdown-item border-radius-md">
                        <span>Daftar</span>
                      </a>
                  </div>
            </ul>
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
