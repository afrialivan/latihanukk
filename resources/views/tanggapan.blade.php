@extends('layouts.main')

@section('container')
    <a href="/semualaporan" class="btn btn-primary text-decoration-none px-2 py-1 my-2">
        <lord-icon src="https://cdn.lordicon.com/iiueiwdd.json" trigger="loop" delay="2000"
            colors="primary:#ffffff,secondary:#08a88a" stroke="100" style="width:30px;height:30px">
        </lord-icon>
    </a>

    <div class="report">
        <div class="row">
            <div class="col-1">
                <img src="../img/profil.png" class="rounded-circle d-none d-lg-block" alt="">
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
                        <img src="{{ asset('storage/' . $pengaduan->foto) }}" alt="" class="img-thumbnail">
                    </div>
                </a>
            </div>
        </div>
        <hr>

        <div class="table-responsive">
            <table class="table table-hover table-borderless">
                <thead>
                    <tr>
                        <th scope="col">
                            <h4>Tanggapan</h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($tanggapans->count())
                        @foreach ($tanggapans as $tanggapan)
                            <tr class="">
                                <td scope="row">{{ $tanggapan->isi_tanggapan }}
                                    <hr>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="">
                            <td scope="row">belum ada tanggapan
                                <hr>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>



    </div>
@endsection
