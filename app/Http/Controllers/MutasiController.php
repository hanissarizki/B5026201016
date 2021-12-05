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
        $pegawai = DB::table('pegawai')->OrderBy('pegawai_nama', 'asc')->get();
	    return view('mutasi.tambah',['pegawai'=>$pegawai]);

    }

    public function store(Request $request)
    {

	DB::table('mutasi')->insert([
		'IDPegawai' => $request->idpegawai,
		'Departemen' => $request->departemen,
		'SubDepartemen' => $request->subdepartemen,
		'MulaiBertugas' => $request->mulaibertugas
	]);
	return redirect('/mutasi');

    }

    public function edit($id)
    {
        $mutasi = DB::table('mutasi')->where('ID',$id)->get();
	    return view('mutasi.edit',['mutasi' => $mutasi]);
    }

    public function update(Request $request)
    {

	DB::table('mutasi')->where('ID',$request->id)->update([
        'IDPegawai' => $request->idpegawai,
		'Departemen' => $request->departemen,
		'SubDepartemen' => $request->subdepartemen,
		'MulaiBertugas' => $request->mulaibertugas
	]);

	return redirect('/mutasi');
    }

    public function hapus($id)
    {
        DB::table('mutasi')->where('ID',$id)->delete();
        return redirect('/mutasi');
    }
}
