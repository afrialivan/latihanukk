@extends('layouts.dashboard')

@section('dashboard')
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->level }}</td>
                        <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $user->id }}" data-bs-whatever="@mdo">Ubah</button></td>
                    </tr>

                    <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Level {{ $user->nama }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="/dashboard/ubahlevel/{{ $user->id }}" method="POST">
                            @csrf
                          <div class="modal-body">
                              <select name="level" class="form-select" aria-label="Default select example">
                                <option value="masyarakat">Masyarakat</option>
                                <option value="petugas">Petugas</option>
                                <option value="admin">Admin</option>
                              </select>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-primary">Ubah</button>
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
