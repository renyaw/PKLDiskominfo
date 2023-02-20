<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Riwayat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbaruser')
    <!-- Navbar End -->

    <!-- Content -->

    @section('container')
    <div class="container text-center">
        <div class="row" style="margin-top:90px; margin-bottom:90px; ">
            <div class="col">
                <div class="container position-relative" style="width: 19rem; height: 19rem; background-color:#87CEFA; border-radius: 1rem;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <p class="text-light" >Surat Pengantar Domisili</p>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                    <a href="riwayatDom" type="button" class="btn btn-outline-success">Lihat Detail</a>
                </div>
            </div>
            <div class="col">
                <div class="container position-relative" style="width: 19rem; height:19rem; background-color:#87CEFA; border-radius: 1rem;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <p class="text-light" >Surat Keterangan Tidak Mampu</p>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                    <a href="riwayatSKTM" type="button" class="btn btn-outline-success">Lihat Detail</a>
                </div>
            </div>
            <div class="col">
                <div class="container position-relative" style="width: 19rem; height:19rem; background-color:#87CEFA; border-radius: 1rem;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <p class="text-light" >Surat Pengantar Kredit</p>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                    <a href="riwayatKred" type="button" class="btn btn-outline-success">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>

    @endsection

    <!-- Content End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
