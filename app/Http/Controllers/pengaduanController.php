<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengaduan', [
            'title' => 'Pengaduan',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {

        return view('reports', [
            'title' => 'Laporan',
            'pengaduans' => Pengaduan::latest()->with('user')->filter(request(['search']))->paginate(5),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'judul_pengaduan' => 'required',
                'tgl_pengaduan' => 'required',
                'isi_laporan' => 'required',
            ],
            [
                'judul_pengaduan.required' => 'Judul pengaduan harus diisi',
                'tgl_pengaduan.required' => 'Tanggal pengaduan harus diisi',
                'isi_laporan.required' => 'Isi laporan pengaduan harus diisi',
            ]
        );

        $validasi['id_user'] = auth()->user()->id;

        $foto = $request->file('foto');
        $validasi['foto'] = $foto->storeAs('public/img', $foto->hashName());

        Pengaduan::create($validasi);

        return redirect('/laporansaya/semua');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        return view('tanggapan', [
            'title' => 'Tanggapan',
            'pengaduan' => $pengaduan,
            'tanggapans' => Tanggapan::where('id_pengaduan', $pengaduan->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home', [
            'title' => 'home'
        ]);
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
