<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Verifikasi SKTM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>

    <!-- Navbar -->
    @extends('navbar.navbaradmin')
    <!-- Navbar End -->

    <!-- Content -->
    @section('container')
    <div class="container mt-4 d-flex justify-content-start">
        <div class="form-group">
            <select class="form-select " name="tampilan" id="tampilan">
                <option value="0">Tampilkan Berdasarkan</option>
                <option value="1">Selesai</option>
                <option value="2">Belum Selesai</option>
            </select>
        </div>
        <br>
    </div>
    <section id="Verifikasi">
        <div class="container mt-5">
            <div class="row text-center">
            </div>
            <div class="row text-center">
                <div class="col">
                <table class="table table-hover table-striped table-info table-bordered">
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    
                    @foreach($query as $data)
                    <tr>
                    <td>{{$data->id_sktm}}</td>
                    <td>{{$data->permohonan_sktm->nik}}</td>
                    <td>{{$data->permohonan_sktm->nama}}</td>
                    <td>{{$data->permohonan_sktm->alamat}}</td>
                    <td>{{$data->permohonan_sktm->no_telp}}</td>
                    <td>{{$data->antre_stat_sktm->proses}}</td>
                    <td>
                    <a href="{{ url('verifSKTM/'.$data->id_sktm) }}" class="btn btn-warning btn-sm">Lihat Berkas</a>
                    </td>
                    </tr>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- Content End-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
