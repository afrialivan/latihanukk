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
            'title' => 'dashboard',
            'status' => 'semua',
            'reports' => Pengaduan::latest()->get(),
            'tanggapans' => Tanggapan::where('id_pengaduan', '2' )->latest()->get()
        ]);
    }

    public function belumView(){
        return view('dashboard.laporan', [
            'title' => 'dashboard',
            'status' => '0',
            'reports' => Pengaduan::where('status', '0')->latest()->get()
        ]);
    }
    public function prosesView(){
        return view('dashboard.laporan', [
            'title' => 'dashboard',
            'status' => 'proses',
            'reports' => Pengaduan::where('status', 'proses')->latest()->get()
        ]);
    }
    public function selesaiView(){
        return view('dashboard.laporan', [
            'title' => 'dashboard',
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
        return view('dashboard.tanggapan', [
            'title' => 'tanggapan',
            'pengaduan' => $pengaduan,
            'tanggapans' => Tanggapan::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function tanggapan(Request $request, Tanggapan $tanggapan, Pengaduan $pengaduan)
    {
        $validasi = $request->validate([
            'isi_tanggapan' => 'required'
        ],[
            'isi_tanggapan.required' => 'Tanggapan harus diisi'
        ]);

        $validasi['id_pengaduan'] = $pengaduan->id;
        $validasi['tgl_tanggapan'] = date('d-m-Y');
        $validasi['id_petugas'] = auth()->user()->id;

        Tanggapan::create($validasi);

        return back();

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
