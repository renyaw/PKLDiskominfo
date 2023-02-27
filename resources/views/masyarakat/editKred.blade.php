<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kredit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbaruser')
    <!-- Navbar End -->

    <!-- Context -->
    @section('container')
    <div class="container">
        <div class="judul">
            <h4 class="text-center mt-3">Surat Pengantar Kredit</h4>
        </div>
        <div class="konten">
            <form action="{{route('formKred.update', $query)}}" method="POST" autocomplete="on" name="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mt-4">
                     <!-- Left -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nama">Nama</label>
                            <input type="text" value="{{Auth::user()->nama}}" class="form-control" id="nama" name="nama" disabled readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{$query->user_kec->nama_kec}}" disabled readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="sp_kel_kred">Surat Pengantar Kelurahan <a href="">Unduh</a></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="sp_kel_kred" name="sp_kel_kred" placeholder="Input">
                                <label class="input-group-text" for="sp_kel_kred">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="ktp_kred">Kartu Tanda Penduduk</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="ktp_kred" name="ktp_kred" placeholder="Input">
                                <label class="input-group-text" for="ktp_kred">Upload</label>
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
                            <input type="text" class="form-control" id="nik" name="nik"  value="{{$query->nik}}" disabled readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="{{$query->user_kel->nama_kel}}" disabled readonly >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kk_kred">Kartu Keluarga</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="kk_kred" name="kk_kred">
                                <label class="input-group-text" for="kk_kred">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="lain_kred">Berkas lain</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="lain_kred" name="lain_kred" placeholder="Input">
                                <label class="input-group-text" for="lain_kred">Upload</label>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
                <!-- End Right -->
                <div class="col-auto d-flex justify-content-end">

                        <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Submit</button>
                    </div>

            </form>
        </div>

    </div>
    @endsection
    <!-- Context End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
