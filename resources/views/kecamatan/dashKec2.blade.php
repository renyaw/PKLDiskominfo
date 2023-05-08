<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbarkec')
    <!-- Navbar End -->

    <!-- Context -->
    @section('container')
    <div class="container text-center">
        <div class="row" style="margin-top:90px; margin-bottom:90px; ">
            <div class="col">
                <div class="container position-relative" style="width: 19rem; height: 19rem; background-color:#87CEFA; border-radius: 1rem;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <p class="fs-1 fw-bold text-light" >
                            @foreach($querydom1 as $data)
                            {{$data->jumlahdom}}
                            @endforeach
                        </p>
                        <p class="text-light" >Surat Keterangan Domisili</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="container position-relative" style="width: 19rem; height:19rem; background-color:#87CEFA; border-radius: 1rem;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <p class="fs-1 fw-bold text-light ">
                            @foreach($querykred1 as $data)
                            {{$data->jumlahkred}}
                            @endforeach
                        </p>
                        <p class="text-light" >Surat Pengantar Kredit</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="container position-relative" style="width: 19rem; height:19rem; background-color:#87CEFA; border-radius: 1rem;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <p class="fs-1 fw-bold text-light">
                            @foreach($querysktm1 as $data)
                            {{$data->jumlahsktm}}
                            @endforeach
                            </p>
                        <p class="text-light" >Surat Keterangan Tidak Mampu</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
    <!-- Context -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
