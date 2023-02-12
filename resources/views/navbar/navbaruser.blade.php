<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://unpkg.com/feather-icons"></script>
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
            Selamat Datang, {{Auth::user()->nama}}!
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="dashMasy">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="domisili">Surat Keterangan Domisili Usaha</a></li>
                        <li><a class="dropdown-item" href="kredit">Surat Pengantar Kredit</a></li>
                        <li><a class="dropdown-item" href="sktm1">Surat Keterangan Tidak Mampu</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="riwayat">Status</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item mt-2"> <i class="bi bi-box-arrow-right"></i>Keluar </button>
                        </form>

                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- Navbar End -->

    <!-- Konten -->
    <div class="container mt-4">
        @yield('container')
    </div>
    <!-- Konten End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
