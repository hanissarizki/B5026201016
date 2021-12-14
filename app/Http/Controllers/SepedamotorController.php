<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SepedamotorController extends Controller
{
    public function index()
    {

    	//$sepedamotor = DB::table('sepedamotor')->get();
        $sepedamotor = DB::table('sepedamotor')->paginate(5) ;
    	return view('sepedamotor.index',['sepedamotor' => $sepedamotor]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepedamotor = DB::table('sepedamotor')
		->where('merksepedamotor','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('sepedamotor.index',['sepedamotor' => $sepedamotor]);

    }

    public function tambah()
    {

	    return view('sepedamotor.tambah');

    }

    public function store(Request $request)
    {

        DB::table('sepedamotor')->insert([
            'kodesepedamotor' => $request->kodesepedamotor,
            'merksepedamotor' => $request->merksepedamotor,
            'stocksepedamotor' => $request->stocksepedamotor,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/sepedamotor');
    }

    public function edit($kodesepedamotor)
    {

	$sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor',$kodesepedamotor)->get();
	return view('sepedamotor.edit',['sepedamotor' => $sepedamotor]);

    }

    public function detail($kodesepedamotor)
    {
        // mengambil data sepedamotor berdasarkan kodesepedamotor yang dipilih
        $sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor', $kodesepedamotor)->get();
        // passing data sepedamotor yang didapat ke view edit.blade.php
        return view('sepedamotor.detail', ['sepedamotor' => $sepedamotor]);
    }

    public function update(Request $request)
    {

	DB::table('sepedamotor')->where('kodesepedamotor',$request->kodesepedamotor)->update([
        'kodesepedamotor' => $request->kodesepedamotor,
        'merksepedamotor' => $request->merksepedamotor,
        'stocksepedamotor' => $request->stocksepedamotor,
        'tersedia' => $request->tersedia
	]);
	return redirect('/sepedamotor');

    }

    public function hapus($kodesepedamotor)
    {

	DB::table('sepedamotor')->where('kodesepedamotor',$kodesepedamotor)->delete();
	return redirect('/sepedamotor');
    }
}
