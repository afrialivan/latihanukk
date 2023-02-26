@extends('layouts.main')


@section('container')
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link fs-6 {{ $status == 'semua' ? 'text-primary' : 'text-dark' }}" aria-current="page"
                href="/laporansaya/semua">Semua</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 {{ $status == '0' ? 'text-primary' : 'text-dark' }}" href="/laporansaya/belum">Belum</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 {{ $status == 'proses' ? 'text-primary' : 'text-dark' }}"
                href="/laporansaya/proses">Proses</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 {{ $status == 'selesai' ? 'text-primary' : 'text-dark' }}"
                href="/laporansaya/selesai">Selesai</a>
            <hr>
        </li>
    </ul>

    <div class="reports">
        @if ($reports->count())
            @foreach ($reports as $report)
                <div class="report">
                    <div class="row">
                        <div class="col-1">
                            <img src="../img/profil.png" alt="" class="rounded-circle d-none d-lg-block">
                        </div>
                        <div class="col-12 col-lg-11 col-md-12 col-sm-12">
                            <p class="float-end text-secondary fs-5">Status:
                                {{ $report->status == '0' ? 'Belum diproses' : $report->status }}</p>
                            <p class="h4 text-primary">{{ $report->user->nama }}</p>
                            <p class="fs-6">{{ $report->tgl_pengaduan }}</p>
                            <p class="fs-6 isiLaporan" id="isiLaporan">{{ $report->isi_laporan }}</p>
                            <a id="read-more" class="readMoreGakTuh text-decoration-none read-more mb-3 cursor">Lihat semua
                                <a cass="mt-5 foto-laporans">
                                    <div class="foto-laporan">
                                        <img src="{{ asset('storage/' . $report->foto) }}" alt="">
                                    </div>
                                </a>
                                <div class="d-flex mt-3">
                                    <a class="tanggapan text-decoration-none text-dark"
                                        href="/tanggapan/{{ $report->id }}">
                                        <i class="bi bi-chat-right-text me-2"></i> Tanggapan
                                    </a>
                                </div>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
        @else
            <p class="fs-5 mt-5  text-center">Data tidak tersedia</p>
        @endif
    </div>
@endsection
