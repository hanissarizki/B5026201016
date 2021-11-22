<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    public function index()
    {

        $mutasi = DB::table('mutasi')->get();

        return view('mutasi.index',['mutasi' => $mutasi]);

    }

    public function tambah()
    {

        return view('mutasi.tambah');

    }

    // method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('mutasi')->insert([
		'IDPegawai' => $request->idpegawai,
		'Departemen' => $request->departemen,
		'SubDepartemen' => $request->subdepartemen,
		'MulaiBertugas' => $request->mulaibertugas
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mutasi');

}
}
