<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard Kecamatan</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbarkec')
    <!-- Navbar End -->

    <!-- Context -->
    @section('container')
    <div class="container mt-3">
        <div class= "container">
            <p class="fs-3 fw-bold"></p>
            <p class="fs-5 fw-bold">Selamat Datang di Dashboard Kecamatan {{$query->user_kec->nama_kec}} </p>
            <p class="fs-5 fw-bold">Silakan pilih kelurahan </p>
        </div>
        <form method="POST" autocomplete="on" name="form" onsubmit="" action="/dashKec">
        @csrf
        <div class="form-group col-8">
            <select class="form-select" name="kelurahan" id="kelurahan">
                <option value="0">-- Pilih Kelurahan --</option>
            </select>
        </div>
        <div class="form-group col-8" hidden>
            <input type="text" name="kecamatan" id="kecamatan" value="{{Auth::user()->kecamatan}}">
        </div>
        <div class="col-auto d-grid gap-2 d-flex justify-content-end">
            <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Lihat permintaan</button>
        </div>
        </form>
    </div>
    @endsection

    <!-- End Context -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <script>
         $(document).ready(function() {
            $(function (){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }});

                $(function (){

                        var id_kec = $('#kecamatan').val();
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
