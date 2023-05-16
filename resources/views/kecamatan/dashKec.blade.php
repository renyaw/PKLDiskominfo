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
    <div class="container">
    <div class="">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="" style="color:#87CEFA;">Sistem Informasi Pelayanan Masyarakat</h1>
            <h4 class="mb-6 text-dark">Salatiga Hati Beriman</h4>
            <h5 class="mb-4 bold text-success">Selamat Datang Di Beranda Kecamatan {{$query->user_kec->nama_kec}} !</h5>
          </div>
        </div>
      </div>

        <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class= "container">
            <p class="fs-5 fw-bold">Permohonan Surat Keterangan Tidak Mampu </p>
            <div class="col">
                <table class="table table-hover table-striped table-info table-bordered">
                    <tr>
                        <th>Kelurahan</th>
                        <th>Jumlah Pengajuan</th>
                    </tr>

                    @foreach($jumlahsktm as $data)
                    <tr>
                        <td>{{$data->nama_kel}}</td>
                        <td>{{$data->jumlah}}</td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>

        <div class= "container">
            <p class="fs-5 fw-bold">Permohonan Surat Keterangan Domisili </p>
            <div class="col">
                <table class="table table-hover table-striped table-info table-bordered">
                    <tr>
                        <th>Kelurahan</th>
                        <th>Jumlah Pengajuan</th>
                    </tr>

                    @foreach($jumlahdom as $data)
                    <tr>
                        <td>{{$data->nama_kel}}</td>
                        <td>{{$data->jumlah}}</td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>

        <div class= "container">
            <p class="fs-5 fw-bold">Permohonan Surat Pengantar Kredit </p>
            <div class="col">
                <table class="table table-hover table-striped table-info table-bordered">
                    <tr>
                        <th>Kelurahan</th>
                        <th>Jumlah Pengajuan</th>
                    </tr>

                    @foreach($jumlahkred as $data)
                    <tr>
                        <td>{{$data->nama_kel}}</td>
                        <td>{{$data->jumlah}}</td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
        </div>


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
