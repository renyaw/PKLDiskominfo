<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Riwayat Domisili</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbaruser')
    <!-- Navbar End -->

    <!-- Content -->

    @section('container')

        <div class="container mt-4">

        @foreach($query as $data)
            <div class="card p-2">
                <h4 class="card-header">Permohonan Surat Keterangan Domisili</h4>
                <div class="card-body">
                    <h5 class="card-title">Diajukan Pada Tanggal {{$data->tgl_antre_dom}}</h5>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-8">
                            <p class="card-text">Permohonan Anda {{$data->antre_stat_dom->proses}} </p>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

    @endsection

    <!-- Content End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
