<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index() {
        return view('login', [
            'title' => 'login'
        ]);
    }

    public function login(Request $request) {
        $login = $request->validate([
            'username' => 'required|max:255|min:5',
            'password' => 'required|max:255',
        ],
        [
            'username.required' => 'Username harus diisi',
            'username.max' => 'Username melebihi batas',
            'username.min' => 'Username tidak boleh kurang dari 5 huruf',
            'password.required' => 'Password harus diisi',
            'password.max' => 'Password melebihi batas',
        ]);

        if(Auth::attempt($login)) {
            $request->session()->regenerate();
            if (auth()->user()->level == 'admin' || auth()->user()->level == 'petugas') {
                return redirect()->intended('/dashboard/laporan');
            }
            return redirect()->intended('/');
        }

        return back()->with('error', 'Login error');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
