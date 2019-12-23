<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<!-- Bagian Header -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #9F000F;">
    <div class="container">
        <a class="navbar-brand" href="http://localhost:8000/beranda">KosKu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="http://localhost:8000/beranda">Beranda<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="http://localhost:8000/Kamar">Info Kamar</a>
            </div>
        </div>
    </div>
</nav>
@yield('header')
<!-- End Bagian Header -->

<!-- Footer-->
<footer class="text-white" style="background-color: #9F000F;">
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
@yield('footer')
<!-- End footer-->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>