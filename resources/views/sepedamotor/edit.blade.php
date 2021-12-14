@extends('layout.ceria')

@section('tittle','SEPEDAMOTOR')

@section('isikonten')

	<h3>Edit Data Sepedamotor</h3>

	<a href="/sepedamotor"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepedamotor as $p)
	<form action="/sepedamotor/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodespedamotor" value="{{ $p->kodesepedamotor }}"> <br/>
		Merk Sepedamotor <input type="text" name="merksepedamotor" required="required"> <br/>
		Stock Sepedamotor <input type="number" name="stocksepedamotor" required="required"> <br/>
		Tersedia
            <input type="radio" id="ada" name="status" value="A">
            <label for="ada">ADA</label></br>
            <input type="radio" id="tidakada" name="status" value="T" checked="checked">
            <label for="tidakada">TIDAK ADA</label></br>
		    <input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
