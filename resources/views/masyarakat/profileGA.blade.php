<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
        <!-- Navbar -->
        @extends('navbar.navbaruser')
        <!-- Navbar End -->

        <!-- Context -->
        @section('container')
        <div class="container bg-white px-3 ">
        <br>
            <h3 class="mt-1 mb-4 text-center">Profil Anda</h3>
            <div class="row">
                <div class="col">
                <div class="card mb-3" style="background-color: #f1f1f1">
                    <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                        <p class="card-text border border-success p-2 mb-3 mt-3 rounded">NIK : {{$query->nik}} </p>
                        <p class="card-text border border-success p-2 mb-3 rounded">Nama Lengkap : {{$query->nama}} </p>
                        <p class="card-text border border-success p-2 mb-3 rounded">Tanggal Lahir : {{$query->tgl_lahir}} </p>
                        <p class="card-text border border-success p-2 mb-3 rounded">Nama Ibu : {{$query->nama_ibu}} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            </p>
                            <p class="card-text border border-success p-2 mb-3 rounded">Kelurahan : {{$query->user_kel->nama_kel}}</p>
                            <p class="card-text border border-success p-2 mb-3 rounded">Kecamatan : {{$query->user_kec->nama_kec}}</p>
                            <p class="card-text border border-success p-2 mb-3 rounded">Alamat Lengkap : {{$query->alamat}}</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-auto justify-content-md-end d-md-flex">
                    <a href="editProfile" button type="submit" name="submit" value="submit" class="btn btn-info text-light">Edit Profile</a>
                </div>
                </div>


        </div>

        @endsection
    <!-- Context End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></s>
    </body>
</html>
