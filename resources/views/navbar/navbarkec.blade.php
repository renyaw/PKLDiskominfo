<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg blur border rounded top-0 z-index-3 shadow my-3 py-2 start-0 end-0 mx-4" style="background-color:#87CEFA;">
        <div class="container">
            <a class="navbar-brand" style="">
                <img src="{{asset('img/Logo.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav navbar-nav-hover ms-auto">

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link" href="dashKec">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akun
                        </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3">
                        <div class="d-none d-lg-block">
                              <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item border-radius-md"> <i class="bi bi-box-arrow-right"></i>Keluar </button>
                            </form>
                        </div>

                    </ul>
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
