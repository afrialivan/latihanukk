<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index() {
        return view('register', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request) {
        $register = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|max:255|min:5|unique:users',
            'tlp' => 'required|max:15',
            'nik' => 'max:20',
            'password' => 'required|max:255',
        ],
        [
            'nama.required' => 'Nama harus diisi',
            'nama.max' => 'Nama melebihi batas',
            'username.required' => 'Username harus diisi',
            'username.max' => 'Username melebihi batas',
            'username.min' => 'Username tidak boleh kurang dari 5 huruf',
            'username.unique' => 'Username tidak tersedia',
            'nik.max' => 'nik melebihi batas',
            'tlp.required' => 'Nomor telepon harus diisi',
            'tlp.max' => 'Nomor telepon melebihi batas',
            'password.required' => 'Password harus diisi',
            'password.max' => 'Password melebihi batas',
        ]
    );
        $register['password'] = bcrypt($register['password']);
        User::create($register);
        $request->session()->flash('success', 'Akun berhasil didaftarkan');
        return redirect('/login');

    }
}
