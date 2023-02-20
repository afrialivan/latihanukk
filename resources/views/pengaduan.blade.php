@extends('layouts.main')

@section('container')

    <img class="animasi1 d-block m-auto" src="img/gambar1.svg" alt="">
    <h2 class="text-center text-light mt-2 px-2">Layanan Aspirasi dan Pengaduan Online Rakyat</h2>
    <p class="text-center text-light mb-5 px-2">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>

    <div class="kotak m-auto rounded-3 px-4 py-4 bg-light mb-5">
        <div class="alert bg-blue">
            <h4 class="text-light">Pengaduan</h4>
        </div>
        <form action="/pengaduan" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-floating mb-3">
                <input type="datetime-local" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" placeholder="a">
                <label for="tgl_pengaduan">Tanggal Pengaduan</label>
            </div>
            <div class="form-floating mb-3">
              <textarea name="isi_laporan" class="form-control" placeholder="Leave a comment here" id="isi_laporan" style="height: 300px" autocomplete="isi_laporan"></textarea>
              <label for="isi_laporan">Isi Laporan</label>
            </div>
            <div class="mb-4">
              <label for="formFileSm" class="form-label">Gambar Pengaduan</label>
              <input class="form-control form-control-sm" name="foto" id="formFileSm" type="file">
            </div>
            <div class="d-grid">
              <button class="btn btn-outline-primary" type="submit">Lapor!</button>
            </div>
        </form>
    </div>
@endsection
