<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Beranda</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbaruser')
    <!-- Navbar End -->

   <!-- Context -->
   @section('container')
    <div class="container">
        <!-- Gambar -->
        <div class="gambar mt-4 d-flex justify-content-center">
            <img src="img/Gunung.jpg" alt="" class="rounded">

        </div>
        <div class="text-center mt-2">
            <h5>Salatiga Hati Beriman</h5>
        </div>
        <!-- Gambar End -->

        <!-- Box Layanan -->

        <div class="row mt-5 d-flex justify-content-center">
        <div class="col-3">
        <a href="formDom" class="text-decoration-none text-dark">
            <div class="logos d-flex justify-content-center z-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="#87CEFA" class="bi bi-currency-dollar border rounded d-flex justify-content-center p-2" viewBox="0 2 16 14">
                <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
            </svg>
            </div>


                    <div class="card z-1" style="">
                    <div class="card-body text-center ">
                        <p class="card-text">Surat Keterangan</p>
                        <p class="card-text fw-bold">Domisili</p>
                    </div>
                    </div>
                    </a>
                </div>

            <div class="col-3 ps-4">
            <a href="formKred" class="text-decoration-none text-dark">
            <div class="logos d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="#87CEFA" class="bi bi-currency-dollar border rounded d-flex justify-content-center p-2" viewBox="0 2 16 14">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                </svg>
            </div>

                <div class="card" style="">
                <div class="card-body text-center">
                    <p class="card-text">Surat Pengantar </p>
                    <p class="card-text fw-bold">Kredit</p>
                </div>
                </div>
                </a>
            </div>


            <div class="col-3">
            <a href="formSKTM1" class="text-decoration-none text-dark">
            <div class="logos d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="#87CEFA" class="bi bi-currency-dollar border rounded d-flex justify-content-center p-2" viewBox="0 2 16 14">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
                <div class="card" style="">
                <div class="card-body text-center">
                    <p class="card-text">Surat Keterangan</p>
                    <p class="card-text fw-bold">Tidak Mampu</p>
                </div>
                </div>
                </a>
            </div>
            <div class="col-3">
            <a href="berkas" class="text-decoration-none text-dark">
            <div class="logos d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="#87CEFA" class="bi bi-currency-dollar border rounded d-flex justify-content-center p-2" viewBox="0 2 16 14">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                </svg>
            </div>
            <div class="card" style="">
                <div class="card-body text-center">
                    <p class="card-text">Kumpulan Berkas</p>
                    <p class="card-text fw-bold">Unduh</p>
                </div>
                </div>
            </div>
            </a>
        </div>
        <!-- Box Layanan End -->
    </div>
    @endsection
    <!-- Context End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
