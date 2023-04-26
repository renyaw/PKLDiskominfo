<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg blur border rounded top-0 z-index-3 shadow my-3 py-2 start-0 end-0 mx-4" style="background-color:#87CEFA;">
        <div class="container">
            <a class="navbar-brand" style="">
                <img src="img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            Selamat Datang, {{Auth::user()->nama}}!
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav navbar-nav-hover ms-auto">

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link" href="dashMasy">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3">
                        <div class="d-none d-lg-block">
                            <a href="formSKTM1" class="dropdown-item border-radius-md">
                                <span>Surat Keterangan Tidak Mampu</span>
                              </a>
                              <a href="formDom" class="dropdown-item border-radius-md">
                                <span>Surat Keterangan Domisili</span>
                              </a>
                              <a href="formKred" class="dropdown-item border-radius-md">
                                <span>Surat Pengantar Kredit</span>
                              </a>
                              <a href="kumpulanBerkas" class="dropdown-item border-radius-md">
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
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                          Akun
                          <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                          <div class="d-none d-lg-block">
                              <a href="profile" class="dropdown-item border-radius-md">
                                  <span>Profil</span>
                              </a>
                              <a href="riwayat" class="dropdown-item border-radius-md">
                                  <span>Riwayat</span>
                              </a>
                              <form action="/logout" method="post">
                                  @csrf
                                  <button type="submit" class="dropdown-item border-radius-md"> <i class="bi bi-box-arrow-right"></i>Keluar </button>
                              </form>
                          </div>
                        </ul>
                      </li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- Navbar End -->

    <!-- Konten -->
    <div class="container mt-3">
        @yield('container')
    </div>
    <!-- Konten End -->
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="../assets/js/plugins/parallax.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
