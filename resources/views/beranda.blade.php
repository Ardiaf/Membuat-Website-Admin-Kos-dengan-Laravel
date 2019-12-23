<!doctype html>
@extends('layout')
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
    .jumbotron {
        margin-top: 20px;
        position:relative;
        background-image: url("header.jpeg");
        opacity:0.7;
        background-position: center center;
        color:#fff;
        width:100%;
        height:100%;
        background-size: cover;
    }
  </style>
 <style>
 body{
   background-color: #FFEBCD;
 }
 </style>
  <body>
<!-- Header-->
@section('header')
@endsection
<!-- End Header-->
<div class="row pt-2"></div>
<!-- Jumbotron-->
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4">KosKu</h1>
    <p class="lead">Nyaman seperti dirumah</p>
  </div>
</div>

<!-- End Jumbotron-->

<!--Tentang-->
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h2>Tentang</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <p>KosKu merupakan Kos khusus perempuan yang berada di Pontianak, Kalimantan Barat.
            KosKu memproitaskan kenyamanan pelanggan sehingga pelanggan dapat merasakan kos bagaikan rumah sendiri.
            KosKu terletak tidak jauh dari kawasan bandara supadio pontianak, sangat cocook untuk karyawati.
            Pelanggan tidak perlu khawatir terhadap fasilitas, karena di KosKu sudah terdapat fasilitas seperti kasur, bantal & guling, lemari, meja, kipas angin/AC, WiFi dapur bersama lengkap dengan kulkas dan tempat masak.
            Terdapat dua tipe kamar, kamar dengan kamar mandi dalam dan kamar mandi luar.
        </div>
        <div class="col-4 text-center">
        <img src="https://www.gambaranimasi.org/data/media/520/animasi-bergerak-rumah-0061.gif" width="75%" border="0" alt="animasi-bergerak-rumah-0061"/>
        </div>
    </div>
</div>
<!--End Tentang-->

<!-- galeri-->
<section id="portfolio" class="portfolip" style="background-color: #CC3333;">
<div class= "container" >
    <div class="row mb-4 pt-4">
        <div class="col text-center">
            <h2>Galeri</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md mb-3">
            <div class="card">
                <img src="1.jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center">Kamar </p>
                </div>
            </div>
        </div>
        <div class="col-md mb-3">
            <div class="card">
                <img src="2.jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center">Kamar</p>
                </div>
            </div>
        </div>
        <div class="col-md mb-3">
            <div class="card">
                <img src="5.jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center">Kamar</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-4" >
        <div class="col-md"></div>
        <div class="col-md mb-3">
            <div class="card">
                <img src="4.jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center">Kamar</p>
                </div>
            </div>
        </div>       
        <div class="col-md mb-3">
            <div class="card">
                <img src="3.jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center">Kamar</p>
                </div>
            </div>
        </div>
        <div class="col-md"></div>
    </div>
</div>
</section>
<!--end galeri-->

<!--Footer-->
@section('footer')
@endsection
<!--End Footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>