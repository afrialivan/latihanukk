@extends('layouts.main')

@section('container')
    {{-- <img src="img/login.svg" class="login-img d-lg-block d-none m-auto" alt="">
    <div class="d-flex justify-content-center align-items-center bg-light rounded-3 login shadow">
        <div class="formm w-100">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/login" method="POST" class="">
                @csrf
                <p class="h2">Halaman Login</p>
                <p class="fs-6">Harap login terlebih dahulu</p>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                </div>
                @error('username')
                    <p class="text-danger fs-6 ms-2 mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                @error('password')
                    <p class="text-danger fs-6 ms-2 mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <div class="d-grid mt-4">
                    <button class="btn btn-outline-primary" type="submit">Login</button>
                </div>
                <p class="h6 mt-3">Belum punya akun? <a href="/register" class="text-decoration-none text-primary">Daftar
                        Sekarang</a></p>
            </form>
        </div>
    </div> --}}


    <div class="login-box">
        <p>Login</p>
        <form action="/login" method="POST">
            @csrf
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
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
        <p>Belum punya akun? <a href="/register" class="a2 text-decoration-none">Daftar Sekarang!</a></p>
    </div>
@endsection
