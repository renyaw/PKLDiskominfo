<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent blur border rounded top-0  shadow start-0 end-0 " style="background-color:#87CEFA;">
        <div class="container">
            <a class="navbar-brand" style="">
                <img src="{{asset('img/Logo.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav navbar-nav-hover ms-auto">

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link" href="dashKel">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Verifikasi
                        </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3">
                        <div class="d-none d-lg-block">
                            <a href="verifSKTM" class="dropdown-item border-radius-md">
                                <span>Surat Keterangan Tidak Mampu</span>
                              </a>
                              <a href="verifDom" class="dropdown-item border-radius-md">
                                <span>Surat Keterangan Domisili</span>
                              </a>
                              <a href="verifKred" class="dropdown-item border-radius-md">
                                <span>Surat Pengantar Kredit</span>
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

                          </div>
                        </div>
                    </ul>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2 mt-2">
                              <form action="/logout" method="post">
                                  @csrf
                                  <button type="submit" class="dropdown-item border-radius-md"> <i class="bi bi-box-arrow-right"></i>Keluar </button>
                              </form>
                      </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- Navbar End -->

    <!-- Context -->

        <div class="container pt-4" style="background-image: url('img/backgroundv2.jpg') ; background-size: cover; background-attachment: fixed; max-width:unset; height:100vh;">
            <div class="row" style="margin-top:90px; margin-bottom:90px; ">
                <div class="col">
                    <div class="container position-relative" style="width: 19rem; height: 19rem; background-color:#87CEFA; border-radius: 1rem;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <p class="fs-1 fw-bold text-light" >
                                @foreach($querydom as $data)
                                {{$data->jumlahdom}}
                                @endforeach
                            </p>
                            <p class="text-light" >Surat Keterangan Domisili</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                        <a href="antreanDom" type="button" class="btn btn-warning">Lihat Detail</a>
                    </div>
                </div>
                <div class="col">
                    <div class="container position-relative" style="width: 19rem; height:19rem; background-color:#87CEFA; border-radius: 1rem;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <p class="fs-1 fw-bold text-light ">
                                @foreach($querykred as $data)
                                {{$data->jumlahkred}}
                                @endforeach
                            </p>
                            <p class="text-light" >Surat Pengantar Kredit</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                        <a href="antreanKred" type="button" class="btn btn-warning">Lihat Detail</a>
                    </div>
                </div>
                <div class="col">
                    <div class="container position-relative" style="width: 19rem; height:19rem; background-color:#87CEFA; border-radius: 1rem;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <p class="fs-1 fw-bold text-light">
                                @foreach($querysktm as $data)
                                {{$data->jumlahsktm}}
                                @endforeach
                            </p>
                            <p class="text-light" >Surat Keterangan Tidak Mampu</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                        <a href="antreanSKTM" type="button" class="btn btn-warning">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Context -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
