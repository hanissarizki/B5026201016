<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AbsenController extends Controller
{
    public function index()
    {

    	//$absen = DB::table('absen')->get();
        $absen = DB::table('absen')
        ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate(5);

    	return view('absen.index',['absen' => $absen]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$absen = DB::table('absen')
		->where('IDPegawai','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
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

    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('absen')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('absen.detail',['pegawai' => $pegawai]);
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
