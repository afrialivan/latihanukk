<?php


namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

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
            'reports' => Pengaduan::latest()->with('user')->paginate(10),
            'tanggapans' => Tanggapan::where('id_pengaduan', '2')->with('user')->latest()->get()
        ]);
    }

    public function belumView()
    {
        return view('dashboard.laporan', [
            'title' => 'dashboard',
            'status' => '0',
            'reports' => Pengaduan::where('status', '0')->latest()->with('user')->paginate(10),
        ]);
    }
    public function prosesView()
    {
        return view('dashboard.laporan', [
            'title' => 'dashboard',
            'status' => 'proses',
            'reports' => Pengaduan::where('status', 'proses')->latest()->with('user')->paginate(10),
        ]);
    }
    public function selesaiView()
    {
        return view('dashboard.laporan', [
            'title' => 'dashboard',
            'status' => 'selesai',
            'reports' => Pengaduan::where('status', 'selesai')->latest()->with('user')->paginate(10),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tanggapan(Request $request, Pengaduan $pengaduan)
    {
        $validasi = $request->validate([
            'isi_tanggapan' => 'required'
        ]);

        $validasi['id_petugas'] = auth()->user()->id;
        $validasi['id_pengaduan'] = $pengaduan->id;
        $validasi['tgl_tanggapan'] = date('Y-m-d');

        $validasi['status'] = 'proses';


        Tanggapan::create($validasi);

        return back();
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
            'tanggapans' => Tanggapan::where('id_pengaduan', $pengaduan->id)->with('user')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function proses(Request $request, Pengaduan $pengaduan)
    {
        Pengaduan::where('id', $pengaduan->id)->update([
            'id_user' => $pengaduan->id_user,
            'isi_laporan' => $pengaduan->isi_laporan,
            'foto' => $pengaduan->foto,
            'status' => 'proses',

        ]);

        return view('dashboard.tanggapan', [
            'title' => 'tanggapan',
            'pengaduan' => $pengaduan,
            'tanggapans' => Tanggapan::where('id_pengaduan', $pengaduan->id)->with('user')->get()
        ]);
    }
    public function selesai(Request $request, Pengaduan $pengaduan)
    {
        Pengaduan::where('id', $pengaduan->id)->update([
            'id_user' => $pengaduan->id_user,
            'isi_laporan' => $pengaduan->isi_laporan,
            'foto' => $pengaduan->foto,
            'status' => 'selesai',

        ]);

        return redirect('/dashboard/laporan');
    }
    
    public function batal(Request $request, Pengaduan $pengaduan)
    {
        Pengaduan::where('id', $pengaduan->id)->update([
            'id_user' => $pengaduan->id_user,
            'isi_laporan' => $pengaduan->isi_laporan,
            'foto' => $pengaduan->foto,
            'status' => 'proses',

        ]);

        return redirect('/dashboard/laporan');
    }

    public function users() {
        return view('dashboard.ubahUser', [
            'title' => 'Users',
            'users' => User::latest()->paginate(10),
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        $validasi = $request->validate([
            'level' => 'required'
        ]);

        $validasi['nik'] = $user->nik;
        $validasi['nama'] = $user->nama;
        $validasi['username'] = $user->username;
        $validasi['password'] = $user->password;
        $validasi['tlp'] = $user->tlp;

        User::where('id', $user->id)->update($validasi);

        return redirect('dashboard/users');
    }

    public function export() {
        return Excel::download(new UsersExport, 'users.xlsx');
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
