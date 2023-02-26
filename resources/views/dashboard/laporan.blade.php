@extends('layouts.dashboard')

@section('dashboard')
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link fs-6 {{ $status == 'semua' ? 'text-primary' : 'text-dark' }}" aria-current="page"
                href="/dashboard/laporan">Semua</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 {{ $status == '0' ? 'text-primary' : 'text-dark' }}" href="/dashboard/belum">Belum</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 {{ $status == 'proses' ? 'text-primary' : 'text-dark' }}"
                href="/dashboard/proses">Proses</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 {{ $status == 'selesai' ? 'text-primary' : 'text-dark' }}"
                href="/dashboard/selesai">Selesai</a>
            <hr>
        </li>
    </ul>


    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="col-1">No</th>
                    <th scope="col" class="col-1">Nama</th>
                    <th scope="col" class="col-1">Tanggal</th>
                    <th scope="col" class="col-6">Pengaduan</th>
                    <th scope="col" class="col-2">Gambar</th>
                    <th scope="col" class="col-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $pengaduan)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $pengaduan->user->nama }}</td>
                        <td>{{ $pengaduan->tgl_pengaduan }}</td>
                        <td>
                            <p>{{ $pengaduan->isi_laporan }}</p>
                            <a class="readmore text-decoration-none" style="cursor: pointer">Lihat Semua</a>
                        </td>
                        <td><img class="img-fluid img-thumbnail" style="width: 150px; height: 150px; object-fit: cover"
                                src="{{ asset('storage/' . $pengaduan->foto) }}" alt=""></td>
                        <td>
                            @if ($pengaduan->status == 0)
                                <a href="/dashboard/proses/{{ $pengaduan->id }}" class="btn btn-outline-primary">Proses</a>
                            @endif
                            @if ($pengaduan->status == 'proses')
                            <div class="d-grid">
                                <a href="/dashboard/tanggapan/{{ $pengaduan->id }}" class="btn btn-outline-primary mb-1">Tanggapi</a>
                                <a href="/dashboard/selesai/{{ $pengaduan->id }}" class="btn btn-outline-primary">Selesai</a>
                            </div>
                            @endif
                            @if ($pengaduan->status == 'selesai')
                                <a href="/dashboard/batalselesai/{{ $pengaduan->id }}" class="btn btn-outline-primary">Batal Selesai</a>
                            @endif
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $reports->links() }}
    </div>
@endsection
