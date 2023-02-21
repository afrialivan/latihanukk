<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo1.svg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @if ($title == 'login' || $title == 'register')
        <link rel="stylesheet" href="css/login.css">
    @endif

    <title>{{ $title }} | Ma'lapor</title>
</head>

<body class="position-relative">

    @if ($title !== 'login' && $title !== 'register')
        @include('partials.navbar')
    @endif

    @if ($title !== 'Laporan Saya' && $title !== 'Laporan')
        <div class="hero-img position-absolute">
            <img class="" src="img/bg.svg" alt="">
        </div>
    @endif

    @if ($title == 'Laporan Saya' || $title == 'Laporan')
        <div class="kotak-profil w-100 bg-blue shadow d-flex align-items-center position-relative">
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>
            <div class="bg-animasi position-absolute"></div>


            <div class="container">
                @if ($title == 'Laporan Saya')
                    <div class="d-flex align-items-center header-foto">
                        <div class="foto-profil rounded-circle bg-light ms-3 shadow">
                            <img src="http://source.unsplash.com/200x200?person" alt="">
                        </div>
                        <div class="mt-lg-3 header-nama">
                            <p class="fw-bold h3 text-light">{{ auth()->user()->nama }}</p>
                        </div>
                    </div>
                    <div class="d-grid mt-3">
                        <a href="" class="btn btn-outline-light">Edit Profil</a>
                    </div>
                @endif
                @if ($title == 'Laporan')
                    <p class="h1 text-center text-light">Semua Laporan</p>
                @endif
            </div>
        </div>
    @endif

    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
