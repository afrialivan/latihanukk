@extends('layouts.main')


@section('container')
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link fs-6 text-primary" aria-current="page" href="#">Semua</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 text-dark" href="#">Belum</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 text-dark" href="#">Proses</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 text-dark" href="#">Selesai</a>
            <hr>
        </li>
    </ul>

    <div class="reports">
        @foreach ($reports as $report)
            <div class="report">
                <div class="row">
                    <div class="col-1">
                        <img src="img/profil.png" alt="" class="rounded-circle d-none d-lg-block">
                    </div>
                    <div class="col-12 col-lg-11 col-md-12 col-sm-12">
                        <p class="h4 text-primary">{{ $report->user->nama }}</p>
                        <p class="fs-6">{{ $report->tgl_pengaduan }}</p>
                        <p class="fs-6 isiLaporan" id="isiLaporan">{{ $report->isi_laporan }}</p>
                        <a  id="read-more" class="readMoreGakTuh text-decoration-none read-more mb-3 cursor">Lihat semua</aca>
                        <a class="mt-5 foto-laporans">
                            <div class="foto-laporan">
                                <img src="{{ asset('storage/' . $report->foto) }}" alt="">
                            </div>
                        </a>
                        <div class="d-flex mt-3">
                            <a class="tanggapan text-decoration-none text-dark" href="">
                                <i class="bi bi-chat-right-text me-2"></i> Tanggapan
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
@endsection
