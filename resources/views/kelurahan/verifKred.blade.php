<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masuk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>

    <!-- Navbar -->
    @extends('navbar.navbaradmin')
    <!-- Navbar End -->

    <!-- Context -->
    @section('container')
    <div class="container">
        <div class="judul">
            <h4 class="text-center mt-3">Surat Pengantar Kredit</h4>
        </div>
        <div class="konten">
            <form action="" method="POST" autocomplete="on" name="form">
                <div class="row mt-4">
                     <!-- Left -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Default" value="{{$data->permohonan_kred->nama}}" disabled readonly>
                            
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Default" value="{{$data->permohonan_kred->user_kec->nama_kec}}" disabled readonly>
                            
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pengantarKel">Surat Pengantar Kelurahan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2" value="{{$data->sp_kel_kred}}">
                                <a href="{{ url('storage/sp_kel_kred/'.$data->sp_kel_kred) }}" class="btn btn-secondary" type="button" id="button-addon2">Unduh</a>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="KTP">Kartu Tanda Penduduk</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2" value="{{$data->ktp_kred}}">
                                <a href="{{ url('storage/ktp_kred/'.$data->ktp_kred) }}" class="btn btn-secondary" type="button" id="button-addon2">Unduh</a>
                            </div>
                        </div>
                        <br>

                    </div>
                    <!-- End Left -->

                    <!-- Right -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Default" value="{{$data->permohonan_kred->nik}}" disabled readonly>
                            
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Default" value="{{$data->permohonan_kred->user_kel->nama_kel}}" disabled readonly>
                            
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kk">Kartu Keluarga</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2" value="{{$data->kk_kred}}">
                                <a href="{{ url('storage/kk_kred/'.$data->kk_kred) }}" class="btn btn-secondary" type="button" id="button-addon2">Unduh</a>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="lain">Berkas Lain</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2" value="{{$data->lain_kred}}">
                                <a href="{{ url('storage/lain_kred/'.$data->lain_kred) }}" class="btn btn-secondary" type="button" id="button-addon2">Unduh</a>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>

                <div class="col-auto d-grid gap-2 d-flex justify-content-end">
                <a href="{{ url('verifKred/diterima/'.$data->id_kred) }}" class="btn btn-outline-success">Terima</a>
                <a href="{{ url('verifKred/ditolak/'.$data->id_kred) }}" class="btn btn-outline-danger">Tolak</a>
                <a href="{{ url('verifKred/kembali/'.$data->id_kred) }}" class="btn btn-outline-primary">Kembali</a>
                </div>

                <!-- End Right -->
            </form>
        </div>

    </div>
    @endsection
    <!-- Context End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
