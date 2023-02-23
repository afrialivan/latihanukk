<?php


namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pengaduan $pengaduan)
    {
        return view('dashboard.laporan', [
            'title' => 'Dashboard',
            'status' => 'semua',
            'reports' => Pengaduan::latest()->get(),
            'tanggapans' => Tanggapan::where('id_pengaduan', '2' )->latest()->get()
        ]);
    }

    public function belumView(){
        return view('dashboard.laporan', [
            'title' => 'Dashboard',
            'status' => '0',
            'reports' => Pengaduan::where('status', '0')->latest()->get()
        ]);
    }
    public function prosesView(){
        return view('dashboard.laporan', [
            'title' => 'Dashboard',
            'status' => 'proses',
            'reports' => Pengaduan::where('status', 'proses')->latest()->get()
        ]);
    }
    public function selesaiView(){
        return view('dashboard.laporan', [
            'title' => 'Dashboard',
            'status' => 'selesai',
            'reports' => Pengaduan::where('status', 'selesai')->latest()->get()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function proses(Request $request, Pengaduan $pengaduan)
    {
        $validasi = $request->validate([
            'isi_tanggapan' => 'required'
        ]);
        
        $validasi['id_petugas'] = auth()->user()->id;
        $validasi['id_pengaduan'] = $pengaduan->id;   
        $validasi['tgl_tanggapan'] = date('Y-m-d');

        $validasi['status'] = 'proses';


        Pengaduan::where('id', $pengaduan->id)->update([
            'id_user' => $pengaduan->id_user,
            'isi_laporan' => $pengaduan->isi_laporan,
            'foto' => $pengaduan->foto,
            'status' => 'proses',

        ]);


        Tanggapan::create($validasi);

        return redirect('/dashboard/laporan')->with('proses');


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
