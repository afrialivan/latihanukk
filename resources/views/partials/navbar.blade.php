<nav class="navbar navbar-expand-lg position-sticky bg-light top-0 navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="img/logo.svg" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-blue active" aria-current="page" href="/">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/semualaporan">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link notif" href="#"><i class="bi bi-bell-fill"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto d-lg-flex align-items-center">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->nama }}
                        </a>
                        <ul class="dropdown-menu float-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/laporansaya">Pengaduan Saya</a></li>
                            {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Pengaturan Akun</a></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="foto rounded-circle border">
                                <img src="http://source.unsplash.com/50x50?person" alt="">
                            </div>
                        </a>
                    </li>

                @endauth
                @guest
                    <a href="/login" class="btn btn-primary">Login</a>
                @endguest
            </ul>
        </div>
    </div>
</nav>
