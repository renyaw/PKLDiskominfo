<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Profile</title>
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
            <h4 class="text-center mt-3">Perbarui Data Diri</h4>
        </div>
        <div class="konten">
            <form action="/update" method="POST" autocomplete="on" name="form">
                @method("put")
                <div class="row mt-4">
                     <!-- Left -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', Auth::user()->nama) }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="ibu">Nama Ibu</label>
                            <input type="text" class="form-control" id="ibu" name="ibu" value="{{ old('nama_ibu', Auth::user()->nama_ibu) }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-select" name="kecamatan" id="kecamatan">
                                <option value="{{ old('id_kec', Auth::user()->id_kec) }}">-- Pilih Kecamatan --</option>
                                @foreach ($data as $kecamatan)
                                    <option value="{{$kecamatan->id_kec}}">{{$kecamatan->nama_kec}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="alamat">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', Auth::user()->alamat) }}" >
                        </div>
                        <br>
                    </div>
                    <!-- End Left -->

                    <!-- Right -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', Auth::user()->nik) }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="tgl">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl" name="tgl" value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <select class="form-select" name="kelurahan" id="kelurahan">
                                <option value="{{ old('id_kel', Auth::user()->id_kel) }}">-- Pilih Kelurahan --</option>
                            </select>
                        </div>
                        <br>

                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="notelp">Nomor Telepon (WA)</label>
                            <input type="text" class="form-control" id="nama" name="notelp" value="{{ old('no_telp', Auth::user()->no_telp) }}" >
                        </div>
                        <br>
                    </div>

                </div>
                <div class="col-auto d-grid gap-2 d-flex justify-content-end">
                        <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Simpan</button>
                        <a href= "profile" type="button"  class="btn btn-outline-success">Kembali</a>
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
