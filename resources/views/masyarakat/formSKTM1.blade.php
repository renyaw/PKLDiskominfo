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
    <div class="container" >
        <h4 class="text-center mt-3 fw-bold">Surat Keterangan Tidak Mampu</h4>
        <h5 class="text-center mt-1">Persyaratan Pelayanan</h5>
    </div>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Persyaratan yang tertera di bawah ini, merupakan persyaratan yang harus dimasukkan ke dalam berkas lain, sesuai dengan keperluan urusan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="container mt-4">
        <p class="fw-bold">A. Surat Keterangan Tidak Mampu yang digunakan untuk Urusan <span class="text-success">Pendidikan</span></p>
        <ul>
            <li>KTP Orang Tua</li>
            <li>Akta Kelahiran Anak yang bersangkutan</li>
            <li>KKS atau Kartu Perlindungan Sosisal lainnya</li>
        </ul>
        <p class="fw-bold">B. Surat Keterangan Tidak Mampu yang digunakan untuk <span class="text-success">Keringanan Biaya Rawat Inap</span></p>
        <ul>
            <li>Surat Rujukan atau Surat Keterangan Rawat Inap atau Surat Keterangan Sakit dari RS/Dokter</li>
            <li>KIS / Kartu BPJS Kesehatan Keluarga Lain (jika ada)</li>
            <li>KKS (jika ada)</li>
        </ul>
        <p class="fw-bold">C. Surat Keterangan Tidak Mampu yang digunakan untuk <span class="text-success">Jampersal</span></p>
        <ul>
            <li>KTP Suami dan Istri</li>
            <li>Surat Keterangan Lahir dari Penolong</li>
            <li>Surat Rujukan atau Surat Keterangan Rawat Inap atau Surat Keterangan Sakit dari RS/Dokter</li>
            <li>KIS / Kartu BPJS Kesehatan Keluarga Lain (jika ada)</li>
            <li>KKS (jika ada)</li>
        </ul>
        <p class="fw-bold">D. Surat Keterangan Tidak Mampu yang digunakan untuk <span class="text-success">Penonaktifan Kepesertaan BPJS Kesehatan/JKN-KIS Pemerintah</span></p>
        <ul>
            <li>KIS / Kartu BPJS Kesehatan yang hendak dinoanaktifkan</li>
            <li>Surat Pernyataan di Dinas Sosial tentang Penonaktifan PBI</li>
        </ul>
        <p class="fw-bold">E. Surat Keterangan Tidak Mampu yang digunakan untuk <span class="text-success">Penonaktifan Kepesertaan BPJS Kesehatan/JKN-KIS Mandiri Kelas III</span></p>
        <ul>
            <li>KIS / Kartu BPJS Kesehatan</li>
            <li>Bukti pelunasan pembayaran premi JKN-KIS Mandiri</li>
        </ul>
        <p class="fw-bold">F. Surat Keterangan Tidak Mampu yang digunakan untuk Urusan <span class="text-success">Di luar Pendidikan dan Kesehatan</span></p>
        <ul>
            Tidak Ada Persyaratan Tambahan (Kosongi Berkas Lain)
        </ul>
    </div>


    <div class="col-auto d-flex justify-content-end mb-3">
        <a href="/formSKTM2" type="button" class="btn btn-outline-success">Isi Form</a>
    </div>
    @endsection
    <!-- Context End -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
