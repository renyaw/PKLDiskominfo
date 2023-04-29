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
    <div class="container mt-3">
        <div class= "container">
            <p class="fs-3 fw-bold"></p>
            <p class="fs-5 fw-bold">Silakan pilih kelurahan </p>
        </div>
        <div class="form-group col-8">
            <select class="form-select" name="keperluan" id="kelurahan">
                <option value="0">-- Pilih Kelurahan --</option>
            </select>
        </div>
    </div>
    @endsection

    <!-- End Context -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
