@extends('layouts.main')

@section('container')
    <form class="d-flex" action="" method="GET">
        @csrf
        <input type="search" name="search" id="" class="form-control" placeholder="Cari laporan ...">
        <button class="btn btn-primary p-1">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" colors="primary:#ffffff,secondary:#000000"
                stroke="60" style="width:50px;height:50px">
            </lord-icon>
        </button>
    </form>


    @foreach ($pengaduans as $pengaduan)
        <div class="report mt-4">
            <div class="row">
                <div class="col-1">
                    <img src="img/profil.png" class="rounded-circle d-none d-lg-block" alt="">
                </div>
                <div class="col-12 col-lg-11 col-md-12 col-sm-12">
                    <p class="float-end text-secondary fs-5">Status:
                        {{ $pengaduan->status == '0' ? 'Belum diproses' : $pengaduan->status }}</p>
                    <p class="h4 text-primary mb-0">{{ $pengaduan->user->nama }}</p>
                    <p class="fs-6 mt-0">{{ $pengaduan->tgl_pengaduan }}</p>
                    <p class="h3 text-dark fw-bold mb-0">{{ $pengaduan->judul_pengaduan }}</p>
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

    <div class="d-flex justify-content-center">
        {{ $pengaduans->links() }}
    </div>
@endsection
