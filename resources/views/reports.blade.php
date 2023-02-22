@extends('layouts.main')

@section('container')
    
@foreach ($reports as $report)
<div class="report">
    <div class="row">
        <div class="col-1">
            <img src="img/profil.png" class="rounded-circle d-none d-lg-block"
                alt="">
        </div>
        <div class="col-12 col-lg-11 col-md-12 col-sm-12">
            <p class="h4 text-primary">{{ $report->user->nama }}</p>
            <p class="fs-6">{{ $report->tgl_pengaduan }}</p>
            <p class="fs-6 isiLaporan" id="isiLaporan">{{ $report->isi_laporan }}</p>
            <a id="read-more" class="readMoreGakTuh text-decoration-none read-more mb-3 cursor">Lihat semua</a>
            <a class="mt-5">
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

@endsection