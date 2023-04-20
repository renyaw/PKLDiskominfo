<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Daftar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->



<nav class="navbar navbar-expand-lg navbar-transparent" style="background-color:#87CEFA;">
    <div class="container">
      <a class="navbar-brand  text-white " rel="tooltip" data-placement="bottom" target="_blank">
        <img src="img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">

        <ul class="navbar-nav navbar-nav-hover ms-auto">

          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" href="/">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              Beranda
            </a>
          </li>

          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              Layanan
              <img src="../assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
              <div class="d-none d-lg-block">
                <a href="login" class="dropdown-item border-radius-md">
                    <span>Surat Keterangan Tidak Mampu</span>
                  </a>
                  <a href="login" class="dropdown-item border-radius-md">
                    <span>Surat Keterangan Domisili</span>
                  </a>
                  <a href="login" class="dropdown-item border-radius-md">
                    <span>Surat Pengantar Kredit</span>
                  </a>
                  <a href="login" class="dropdown-item border-radius-md">
                    <span>Kumpulan Berkas</span>
                  </a>
              </div>
              <div class="row d-lg-none">
                <div class="col-md-12">
                  <div class="d-flex mb-2">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                    </div>
                  </div>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-laptop text-gradient text-primary"></i>
                    </div>
                  </div>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-badge text-gradient text-primary"></i>
                    </div>
                  </div>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-notification-70 text-gradient text-primary"></i>
                    </div>
                  </div>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-app text-gradient text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              Akun
              <img src="../assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                <div class="d-none d-lg-block">
                    <a href="login" class="dropdown-item border-radius-md">
                        <span>Masuk</span>
                      </a>
                      <a href="daftar" class="dropdown-item border-radius-md">
                        <span>Daftar</span>
                      </a>
                  </div>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Navbar End -->

    <!-- Context -->
    <section>
    <div class="container pt-4" style="background-image: url('img/backgroundv2.jpg') ;background-size: cover; background-attachment: fixed; max-width:unset;">
      <div class="row d-flex justify-content-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border: none; ">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5  d-none d-md-block">
                <img class="img-fluid mt-5"src="img\Logo.png"
                  alt="icon" class="justify-content-center" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <div class="d-flex align-items-center pb-1">
                      <i class="fas fa-cubes fa-2x" style=""></i>
                      <span class="h1 fw-bold mb-0">SIP MAS</span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Buat Akun</h5>
                    <div class="row justify-content-center">
          <div class="">
            <div class="card" style="border-radius: 1rem; border-color:#87CEFA; border-width: 2px;">
                <div class="card-body">
                  <form method="POST" autocomplete="on" name="form" onsubmit="" action="/daftar">
                    @csrf
                    <div class="form-group">
                          <label for="nik">NIK</label>
                          <input type="text" class="form-control @error('nik')
                          is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan NIK" value="{{old('nik')}}" >
                          @error('nik')
                            <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama')
                        is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap"value="{{old('nama')}}">
                        @error('nama')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tgl_lahir')
                        is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="{{old('tgl_lahir')}}">
                        @error('tgl_lahir')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon (Terdaftar di Whatsapp)</label>
                        <input type="text" class="form-control @error('no_telp')
                        is-invalid @enderror" id="no_telp" name="no_telp" placeholder="Masukkan Nomor Telepon"value="{{old('no_telp')}}">
                        @error('no_telp')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control @error('nama_ibu')
                        is-invalid @enderror" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" value="{{old('nama_ibu')}}">
                        @error('nama_ibu')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>


                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" value="{{old('kecamatan')}}">
                            <option value="0">-- Pilih Kecamatan --</option>
                            @foreach ($data as $kecamatan)
                                <option value="{{$kecamatan->id_kec}}">{{$kecamatan->nama_kec}}</option>
                            @endforeach
                        </select>
                        @error('kecamatan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <select class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" id="kelurahan" value="{{old('kelurahan')}}">
                        <option value="0">-- Pilih Kelurahan --</option>
                        </select>
                        @error('kelurahan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>


                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" class="form-control @error('alamat')
                        is-invalid @enderror" id="alamat" name="alamat" placeholder="Isi dengan alamat lengkap" value="{{old('alamat')}}">
                        @error('alamat')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username')
                        is-invalid @enderror" id="username" name="username" placeholder="Masukkan username" value="{{old('username')}}">
                        @error('username')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        <small class="form-text text-success" id="username_success" style="display: none">Username tersedia</small>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Masukkan Password">
                        @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="tipe">Confirm Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Ulang Password" >
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <br>
                    <p>Sudah Punya Akun? <a href="login">Masuk</a></p>
                    <br>
                    <div class="col-auto justify-content-md-end d-md-flex">
                        <button type="submit" name="submit" value="submit" class="btn btn-info text-light">Daftar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
    <!-- Context End-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
            $(function (){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }});

                $(function (){
                    $('#kecamatan').on('change',function(){
                        let id_kec = $('#kecamatan').val();
                        // console.log(id_kec);

                        $.ajax({
                            type: 'POST',
                            url : "{{route('getKelurahan')}}",
                            data : {id_kec:id_kec},
                            cache : false,

                            success : function(msg) {
                                $('#kelurahan').html(msg);
                            },
                            error : function(data) {
                                console.log('error', data);
                            },

                        })
                    })
                })
            });

        </script>
    </body>
</html>
