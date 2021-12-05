<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AbsenController extends Controller
{
    public function index()
    {

    	$absen = DB::table('absen')->get();
    	return view('absen.index',['absen' => $absen]);

    }

    public function tambah()
    {

        $pegawai = DB::table('pegawai')->OrderBy('pegawai_nama', 'desc')->get();
	    return view('absen.tambah',['pegawai'=>$pegawai]);

    }

    public function store(Request $request)
    {

        DB::table('absen')->insert([
            'ID' => $request->ID,
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        return redirect('/absen');
    }

    public function edit($id)
    {

	$absen = DB::table('absen')->where('ID',$id)->get();
	return view('absen.edit',['absen' => $absen]);

    }

    public function update(Request $request)
    {

	DB::table('absen')->where('ID',$request->id)->update([
		    'ID' => $request->ID,
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
	]);
	return redirect('/absen');

    }

    public function hapus($id)
    {

	DB::table('absen')->where('ID',$id)->delete();
	return redirect('/absen');
    }
}
