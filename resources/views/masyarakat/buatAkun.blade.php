<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg" style="background-color:#87CEFA;">
        <div class="container">
            <a class="navbar-brand" style="">
                <img src="img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border rounded-4" href="signin">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Context -->
    <section>
    <div class="container mt-3">
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
                  <form method="POST" autocomplete="on" name="form" onsubmit="return cekDaftar()" action="{{url('signup')}}">
                    {{ csrf_token() }}
                    <div class="form-group">
                          <label for="nik">NIK</label>
                          <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" >
                          <small class="form-text text-danger" id="nik_error"></small>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" >
                        <small class="form-text text-danger" id="nama_error"></small>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Masukkan Tanggal Lahir" >
                        <small class="form-text text-danger" id="tgl_error"></small>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="ibu">Nama Ibu</label>
                        <input type="text" class="form-control" id="ibu" name="ibu" placeholder="Masukkan Nama Ibu" >
                        <small class="form-text text-danger" id="ibu_error"></small>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                        <small class="form-text text-danger" id="email_error"></small>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <select class="form-control" name="kelurahan" id="kelurahan">
                        <option value="0">-- Pilih Kelurahan --</option>
                        <?

                        ?>
                        </select>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                        <option value="0">-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Isi dengan alamat lengkap">
                        <small class="form-text text-danger" id="alamat_error"></small>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                        <small class="form-text text-danger" id="username_error"></small>
                        <small class="form-text text-success" id="username_success" style="display: none">Username tersedia</small>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"  placeholder="Masukkan Password">
                        <small class="form-text text-danger" id="password_error"></small>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="tipe">Confirm Password</label>
                        <input type="password" class="form-control" id="conpass" name="conpass" placeholder="Masukkan Ulang Password" >
                        <small class="form-text text-danger" id="conpass_error"></small>
                    </div>

                    <br>
                    <p>Sudah Punya Akun? <a href="/">Masuk</a></p>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
