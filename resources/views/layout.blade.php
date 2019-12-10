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
<div class="row">
    <div class="col-md-12 header" id="site-header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/beranda" target="_blank">KosKu</a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/beranda">Beranda</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang" target="_blank">Tetang</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galeri" target="_blank">Galeri</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak" target="_blank">Kontak</a></li>
                </ul>
                <button class="btn btn-success navbar-btn">Booking</button>   
            </div>
        </nav>
    </div>
</div>
<!-- End Bagian Header -->

@yield('header')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>