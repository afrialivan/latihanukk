@extends('layouts.main')

@section('container')
    {{-- <img src="img/login.svg" class="login-img d-lg-block d-none m-auto" alt="">
    <div class="d-flex justify-content-center align-items-center bg-light rounded-3 login shadow">
        <div class="formm w-100">
            <form action="/register" method="POST" class="">
              @csrf
                <p class="h2">Halaman Registrasi</p>
                <p class="fs-6">Harap registrasi terlebih dahulu</p>
                <div class="form-floating mb-3">
                    <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nama Lengkap</label>
                    @error('nama')
                      <p class="text-danger fs-6 ms-2 mt-1">
                        {{ $message }}
                      </p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                    @error('username')
                      <p class="text-danger fs-6 ms-2 mt-1">
                        {{ $message }}
                      </p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="tlp" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nomor Telepon</label>
                    @error('tlp')
                      <p class="text-danger fs-6 ms-2 mt-1">
                        {{ $message }}
                      </p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nik" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">NIK (bisa kosong)</label>
                    @error('nik')
                      <p class="text-danger fs-6 ms-2 mt-1">
                        {{ $message }}
                      </p>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                      <p class="text-danger fs-6 ms-2 mt-1">
                        {{ $message }}
                      </p>
                    @enderror
                </div>
                <div class="d-grid mt-4">
                    <button class="btn btn-outline-primary">Register</button>
                </div>
                <p class="h6 mt-3">sudah punya akun? <a href="/login" class="text-decoration-none text-primary">Login Sekarang</a></p>
            </form>
        </div>
    </div> --}}

    <div class="login-box">
        <p>Register</p>
        <form action="/login" method="POST">
            @csrf
            <div class="user-box">
                <input required="" name="nama" type="text" autocomplete="none">
                <label>Nama Lengkap</label>
            </div>
            @error('nama')
                <p class="text-danger fs-6 ms-2 mt-1">
                    {{ $message }}
                </p>
            @enderror
            <div class="user-box">
                <input required="" name="username" type="text" autocomplete="none">
                <label>Username</label>
            </div>
            @error('username')
                <p class="text-danger fs-6 ms-2 mt-1">
                    {{ $message }}
                </p>
            @enderror
            <div class="user-box">
                <input required="" name="tlp" type="text" autocomplete="none">
                <label>Nomor Telepom</label>
            </div>
            @error('tlp')
                <p class="text-danger fs-6 ms-2 mt-1">
                    {{ $message }}
                </p>
            @enderror
            <div class="user-box">
                <input required="" name="password" type="password">
                <label>Password</label>
            </div>
            @error('password')
                <p class="text-danger fs-6 ms-2 mt-1">
                    {{ $message }}
                </p>
            @enderror
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
        </form>
        <p>Sudah punya akun? <a href="/login" class="a2 text-decoration-none">Login Sekarang!</a></p>
    </div>
@endsection
