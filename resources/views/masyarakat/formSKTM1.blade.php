<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SKTM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbaruser')
    <!-- Navbar End -->

    <!-- Context -->
    @section('container')
    <div class="container">
        <h4 class="text-center mt-3">Surat Keterangan Tidak Mampu jhjkhj</h4>
    </div>

    <div class="container mt-3">
        <div class="form-group">
            <div class="tulisan">
                <p class="text">Keperluan (Silahkan Pilih Salah Satu Layanan untuk Melihat Persyaratan)</p>
            </div>
            <br>

            <div class="form-group col-8">
                <select class="form-control" name="keperluan" id="keperluan">
                <option value="0">-- Pilih Keperluan (Layanan) --</option>
                </select>
            </div>
            <br>

        </div>
    </div>

    <!-- Field Berkas -->

    <!-- Field Berkas End -->

    <div class="col-auto d-flex justify-content-end">
        <button type="submit" name="submit" value="submit" href="sktm2" class="btn btn-outline-success">Next</button>
    </div>
    @endsection
    <!-- Context End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
