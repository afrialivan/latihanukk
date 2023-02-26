<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporanSaya', [
            'title' => 'Laporan Saya',
            'status' => 'semua',
            'reports' => Pengaduan::where('id_user', auth()->user()->id)->latest()->with('user')->paginate(10)
        ]);
    }
    public function belum()
    {
        return view('laporanSaya', [
            'title' => 'Laporan Saya',
            'status' => '0',
            'reports' => Pengaduan::where('id_user', auth()->user())->orWhere('status', '0')->latest()->paginate(10)
        ]);
    }
    public function proses()
    {
        return view('laporanSaya', [
            'title' => 'Laporan Saya',
            'status' => 'proses',
            'reports' => Pengaduan::where('id_user', auth()->user())->orWhere('status', 'proses')->latest()->paginate(10)
        ]);
    }
    public function selesai()
    {
        return view('laporanSaya', [
            'title' => 'Laporan Saya',
            'status' => 'selesai',
            'reports' => Pengaduan::where('id_user', auth()->user())->orWhere('status', 'selesai')->latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
