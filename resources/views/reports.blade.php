@extends('layouts.main')

@section('container')
    
@foreach ($reports as $pengaduan)
<div class="report">
    <div class="row">
        <div class="col-1">
            <img src="img/profil.png" class="rounded-circle d-none d-lg-block"
                alt="">
        </div>
        <div class="col-12 col-lg-11 col-md-12 col-sm-12">
            <p class="float-end text-secondary fs-5">Status:
                {{ $pengaduan->status == '0' ? 'Belum diproses' : $pengaduan->status }}</p>
            <p class="h4 text-primary">{{ $pengaduan->user->nama }}</p>
            <p class="fs-6">{{ $pengaduan->tgl_pengaduan }}</p>
            <p class="fs-6 isiLaporan" id="isiLaporan">{{ $pengaduan->isi_laporan }}</p>
            <a id="read-more" class="readMoreGakTuh text-decoration-none read-more mb-3 cursor">Lihat semua</a>
            <a class="mt-5">
                <div class="foto-laporan">
                    <img src="{{ asset('storage/' . $pengaduan->foto) }}" alt="">
                </div>
            </a>
            <div class="d-flex mt-3">
                <a class="tanggapan text-decoration-none text-dark" href="/tanggapan/{{ $pengaduan->id }}">
                    <i class="bi bi-chat-right-text me-2"></i> Tanggapan
                </a>
            </div>
        </div>
    </div>
    <hr>
</div>
@endforeach

@endsection