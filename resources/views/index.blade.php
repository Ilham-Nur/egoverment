<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-donor Darah</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Ganti latar belakang jumbotron menjadi merah */
        .jumbotron {
            background-color: #ca0404;
            color: white;
        }
        /* Ganti warna teks navbar menjadi merah */
        .navbar {
            background-color: #ca0404;
            color: white;
        }

        /* Atur margin atas agar jumbotron tidak menutup konten */
        .content {
            margin-top: 100px;
        }

        .carousel-item img {
        max-width: 100%;
        height: 400px;
    }
    </style>
</head>
<body>
    <!-- Navbar dengan navbar-fixed-top untuk mengikuti scroll -->
    <nav class="navbar navbar-expand-lg py-5 fixed-top"  id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">E-Donor Darah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item pe-2">
                        <a class="nav-link btn btn-light" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light" href="#">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
    

   <!-- Jumbotron dengan gambar slider -->
<div class="jumbotron text-center" style="height: 600px; overflow: hidden;">
    <div id="imageSlider" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators (titik navigasi) -->
        <ol class="carousel-indicators">
            <li data-bs-target="#imageSlider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#imageSlider" data-bs-slide-to="1"></li>
            <li data-bs-target="#imageSlider" data-bs-slide-to="2"></li>
        </ol>
        
        <!-- Gambar slider -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/gambar4.png') }}" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/gambar2.png') }}" class="d-block w-100" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/gambar3.png') }}" class="d-block w-100" alt="Gambar 3">
            </div>
        </div>

        <!-- Tombol navigasi slider -->
        <a class="carousel-control-prev" href="#imageSlider" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageSlider" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    
    <h1>Selamat datang di E-Donor Darah</h1>
    <p>Aplikasi yang memudahkan Anda dalam mencari dan memberikan donor darah.</p>
</div>


    <!-- Konten tambahan di bawah jumbotron -->
    <div class="container content">
        <h2>Konten Tambahan</h2>
        <p>Isi konten tambahan Anda di sini.</p>
    </div>

    <!-- Tambahkan link ke Bootstrap JavaScript (Popper.js dan Bootstrap.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function () {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 100) { // Atur tinggi yang sesuai dengan kapan navbar harus menjadi fixed
                navbar.classList.add('fixed-top');
            } else {
                navbar.classList.remove('fixed-top');
            }
        });
    </script>
</body>
</html>
