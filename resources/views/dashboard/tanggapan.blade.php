@extends('layouts.dashboard')

@section('dashboard')
    <div class="report">
        <div class="row">
            <div class="col-1">
                <img src="../../img/profil.png" class="rounded-circle d-none d-lg-block" alt="">
            </div>
            <div class="col-12 col-lg-11 col-md-12 col-sm-12">
                <p class="h4 text-primary">{{ $pengaduan->user->nama }}</p>
                <p class="fs-6">{{ $pengaduan->tgl_pengaduan }}</p>
                <p class="fs-6 isiLaporan" id="isiLaporan">{{ $pengaduan->isi_laporan }}</p>
                <a id="read-more" class="text-decoration-none readmore mb-3 d-block"
                    style="cursor: pointer; margin-top: -10px;">Lihat semua</a>
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
                        <th scope="col"><h4>Tanggapan</h4></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tanggapans as $tanggapan)
                        <tr class="">
                            <td scope="row">{{ $tanggapan->isi_tanggapan }} <hr></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="d-grid">
            <form action="/dashboard/tanggapan/{{ $pengaduan->id }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="tanggapan" class="form-label">Isi Tanggapan :</label>
                    <textarea class="form-control" name="isi_tanggapan" id="tanggapan" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Tanggapi</button>
                </div>
            </form>
        </div>

    </div>
@endsection
