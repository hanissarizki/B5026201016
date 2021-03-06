<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PegawaiController extends Controller
{
    public function index()
    {

        //$pegawai = DB::table('pegawai')->get();
        $pegawai = DB::table('pegawai')->paginate(5) ;

        return view('pegawai.index',['pegawai' => $pegawai]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
        ->orWhere('pegawai_alamat','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('pegawai.index',['pegawai' => $pegawai]);

    }

    public function tambah()
    {

	    return view('pegawai.tambah');

    }

    public function store(Request $request)
    {

	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	return redirect('/pegawai');

    }

    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	    return view('pegawai.edit',['pegawai' => $pegawai]);
    }

    // method untuk melihat detail data pegawai
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pegawai.detail', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {

	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
        'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);

	return redirect('/pegawai');
    }

    public function hapus($id)
    {
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        return redirect('/pegawai');
    }
}
