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
                @foreach ($reports as $report)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $report->user->nama }}</td>
                        <td>{{ $report->tgl_pengaduan }}</td>
                        <td>
                            <p>{{ $report->isi_laporan }}</p>
                            <a class="readmore text-decoration-none" style="cursor: pointer">Lihat Semua</a>
                        </td>
                        <td><img class="img-fluid img-thumbnail" style="width: 150px; height: 150px; object-fit: cover"
                                src="{{ asset('storage/' . $report->foto) }}" alt=""></td>
                        <td>
                            @if ($report->status == 0)
                                <a href="/dashboard/tanggapan/{{ $report->id }}" class="btn btn-outline-primary">Proses</a>
                            @endif
                            @if ($report->status == 'proses')
                                <div class="d-grid">
                                    <a href="/tanggapan" class="btn btn-outline-primary mb-1">Tanggapi</a>
                                    <button class="btn btn-outline-primary">Selesai</button>
                                </div>
                            @endif
                        </td>
                    </tr>

                    {{-- belum --}}
                    <div class="modal fade" id="belum{{ $loop->iteration }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tanggapi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/dashboard/belum/{{ $report->id }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <textarea class="form-control" id="message-text" name="isi_tanggapan"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
