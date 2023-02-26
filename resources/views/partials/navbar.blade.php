<nav class="navbar navbar-expand-lg position-sticky bg-light top-0 navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ ($title == 'Laporan Saya' || $title == 'Tanggapan') ? '../' : '' }}img/logo.svg"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-blue active" ari a-current="page" href="/">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/semualaporan">Laporan</a>
                </li>
                @can('petugasAdmin')
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/laporan">Dashboard</a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link notif" href="#"><i class="bi bi-bell-fill"></i></a>
                </li>
                <li class="nav-item">
                    <div class="toggleWrapper">
                        <input type="checkbox" class="dn" id="dn">
                        <label for="dn" class="toggle">
                            <span class="toggle__handler">
                                <span class="crater crater--1"></span>
                                <span class="crater crater--2"></span>
                                <span class="crater crater--3"></span>
                            </span>
                            <span class="star star--1"></span>
                            <span class="star star--2"></span>
                            <span class="star star--3"></span>
                            <span class="star star--4"></span>
                            <span class="star star--5"></span>
                            <span class="star star--6"></span>
                        </label>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto d-lg-flex">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->nama }}
                        </a>
                        <ul class="dropdown-menu float-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/laporansaya/semua">Pengaduan Saya</a></li>
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
                                <img src="{{ ($title == 'Laporan Saya' || $title == 'Tanggapan') ? '../' : '' }}img/profil.png" alt="">
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
