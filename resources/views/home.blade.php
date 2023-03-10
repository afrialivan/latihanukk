<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="stylesheet" href="css/homeButton.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Home</title>
</head>

<body>

    @include('partials.navbar')

    <div class="position-absolute" style="z-index: -999">
        <div class="bg-home"></div>
        <div class="custom-shape-divider-top-1677502627">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M649.97 0L599.91 54.12 550.03 0 0 0 0 120 1200 120 1200 0 649.97 0z" class="shape-fill"></path>
            </svg>
        </div>
    </div>


    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="h1 fw-bold text-light header-text">Layanan Aspirasi dan Pengaduan Online Rakyat</p>
                <p class="fs-4 text-light header-text">Sampaikan laporan Anda kapan saja dan dimana saja</p>
                <form action="/login">
                    <button class="cssbuttons-io-button"> Get started
                        <div class="icon">
                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </button>
                </form>
            </div>
            <div class="col-lg-6">
                <img src="img/home.svg" style="width: 600px;" class="d-lg-block d-none m-auto" alt="">
            </div>
        </div>
    </div>

    <section>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
