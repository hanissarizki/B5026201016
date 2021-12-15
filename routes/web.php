<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tug4web');
});

Route::get('praktikum2','ViewController@showPraktikum2');
Route::get('ets','ViewController@showEts');
Route::get('tugasphp','ViewController@showIsian');
Route::get('prosespangkat','ViewController@prosespangkatfunc');

//route CRUD mutasi
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('mutasi/hapus/{id}','MutasiController@hapus');
Route::get('/mutasi/cari','MutasiController@cari');
Route::get('mutasi/view/{id}','MutasiController@detail');

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('pegawai/store','PegawaiController@store');
Route::get('pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('pegawai/view/{id}','PegawaiController@detail');

//route CRUD absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('absen/view/{id}','AbsenController@detail');

//route CRUD sepedamotor
Route::get('/sepedamotor','SepedamotorController@index');
Route::get('/sepedamotor/tambah','SepedamotorController@tambah');
Route::post('sepedamotor/store','SepedamotorController@store');
Route::get('sepedamotor/edit/{kodesepedamotor}','SepedamotorController@edit');
Route::post('/sepedamotor/update','SepedamotorController@update');
Route::get('sepedamotor/hapus/{kodesepedamotor}','SepedamotorController@hapus');
Route::get('sepedamotor/cari','SepedamotorController@cari');
Route::get('sepedamotor/view/{kodesepedamotor}','SepedamotorController@detail');

//route CRUD pagecounter
Route::get('/pagecounter','PagecounterController@index');

