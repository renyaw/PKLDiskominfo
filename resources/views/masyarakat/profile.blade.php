<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="76x80" href="img/Logo.png">
  <title>
    Profile
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="contact-us">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg blur border-radius-xl mt-4 top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand " rel="tooltip" data-placement="bottom" target="_blank">
                <img src="img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga |
                Halo, {{Auth::user()->nama}}!
            </a>

            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" href="dashMasy">
                    <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                    Beranda
                  </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                    Layanan
                    <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
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
                    <i class="material-icons opacity-6 me-2 text-md">article</i>
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
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
  <section>
    <div class="page-header min-vh-100 ">
      <div class="container mt-5">
        <div class="row">
          <div class="mt-2 col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('img/mongin.jpg'); background-size: cover;" loading="lazy"></div>
          </div>
          <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <div class="card d-flex blur justify-content-center shadow-info shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-info shadow-info border-radius-lg p-3">
                  <h3 class="text-white text-primary mb-0 text-center">Profil Anda</h3>
                </div>
              </div>
              <div class="card-body">
                  <div class="card-body p-0 my-3">
                    <div class="">
                      <div class="">
                        <div class="input-group input-group-static mb-4">
                            <label class="card-text rounded">NIK : {{$query->nik}} </label>
                        </div>
                      </div>
                      <div class="">
                        <div class="input-group input-group-static mb-4">
                            <label class="card-text rounded">Nama Lengkap : {{$query->nama}} </label>
                        </div>
                      </div>
                      <div class="">
                        <div class="input-group input-group-static mb-4">
                            <label class="card-text rounded">Tanggal Lahir : {{$query->tgl_lahir}} </label>
                        </div>
                      </div>
                      <div class="">
                        <div class="input-group input-group-static mb-4">
                            <label class="card-text rounded">Nama Ibu : {{$query->nama_ibu}} </label>
                        </div>
                      </div>
                      <div class="">
                        <div class="input-group input-group-static mb-4">
                            <label class="card-text rounded">Kelurahan : {{$query->user_kel->nama_kel}} </label>
                        </div>
                      </div>
                      <div class="">
                        <div class="input-group input-group-static mb-4">
                            <label class="card-text rounded">Kecamatan : {{$query->user_kec->nama_kec}} </label>
                        </div>
                      </div>
                      <div class="">
                        <div class="input-group input-group-static mb-4">
                            <label class="card-text rounded">Alamat Lengkap : {{$query->alamat}} </label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 text-center">
                        <a href="editProfile" button type="submit" name="submit" value="submit" class="btn bg-gradient-warning mt-3 mb-0 shadow-warning">Edit Profile</a>

                    </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- END HEADER 8 w/ card over right bg image ------- -->
  <footer class="footer pt-5 mt-5">
    <div class="container">

    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>
