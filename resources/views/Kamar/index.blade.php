<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>KosKu</title>
  </head>
<style>
 body{
   background-color: #FFEBCD;
 }
 </style>
<body>
<!-- Header-->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #9F000F;">
        <div class="container">
            <a class="navbar-brand" href="http://localhost:8000/beranda">KosKu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="http://localhost:8000/beranda">Beranda<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="http://localhost:8000/Kamar">Info Kamar</a>
                </div>
            </div>
        </div>
    </nav>

<!-- End Header-->

<!--isi-->
<div class="container">
    <div class="row pt-5"></div>
</div>

<div class="container-md">
    <div class="row pt-3">
        <div class="col-md">
            <h2>Info Kamar</h2>
            <a href="/Kamar/create">Tambah Data Kamar</a>
            <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nomor Kamar</th>
                    <th>Kapasitas</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Update<th>
                </tr>
            </thead>
                @foreach($kamars as $info_kamar)
                <tr>
                    <td>{{$info_kamar->id}}</td>
                    <td>{{$info_kamar->Nomor_Kamar}}</td>
                    <td>{{$info_kamar->Kapasitas}}</td>
                    <td>{{$info_kamar->Harga_Per_Bulan}}</td>
                    <td>{{$info_kamar->Status}}</td>
                    <td><a href="/Kamar/{{ $info_kamar->id}}/edit">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- End isi-->

<!-- Footer-->
<footer class="page-footer text-white" style="background-color: #9F000F;">
    <div class="container-fluid padding">
        <div class="row">
            <div class=col-2></div>
            <div class="col-3 text-center mt-3">
                <hr color="white">
                <p>Kontak</p>
                <hr color="white">
                <p>0822-1111-3333</p>
                <p>kosku@gmail.com</p>
            </div>
            <div class=col-2></div>
            <div class="col-3 text-center mt-3">
                <hr color="white">
                <p>Alamat</p>
                <hr color="white">
                <p>Jl.Arteri Supadio, komplek angkasa permai blok a-8</p>
            </div>
            <div class=col-2></div>
        </div>
        <div class="row bg-dark pt-3">
            <div class="col text-center">
            <p>KosKu.com</p>
            </div>
        </div>
    </div>
</footer>
<!--End Footer-->

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>