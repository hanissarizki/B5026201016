@extends('layout.ceria')

@section('tittle','SEPEDA MOTOR')

@section('isikonten')

	<h3>Tambah Data Sepeda Motor</h3>

	<a href="/sepedamotor"> Kembali</a>

	<br/>
	<br/>

	<form action="sepedamotor/store" method="post">
		{{ csrf_field() }}
        Kode Sepedamotor <input type="number" name="kodesepedamotor" required="required"> <br/>
		Merk Sepedamotor <input type="text" name="merksepedamotor" required="required"> <br/>
		Stock Sepedamotor <input type="number" name="stocksepedamotor" required="required"> <br/>
		Tersedia
            <input type="radio" id="ada" name="status" value="A">
            <label for="ada">ADA</label></br>
            <input type="radio" id="tidakada" name="status" value="T" checked="checked">
            <label for="tidakada">TIDAK ADA</label></br>
        <input type="submit" value="Simpan Data">
	</form>
@endsection
