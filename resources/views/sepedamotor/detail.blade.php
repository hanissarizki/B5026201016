@extends('layout.ceria')

@section('tittle','SEPEDAMOTOR')

@section('isikonten')
<body>

    <h3>Detail Data Sepedamotor</h3>

	<a href="/sepedamotor"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepedamotor as $p)
		{{ csrf_field() }}
		Kode Sepedamotor: {{ $p->kodesepedamotor }} <br/>
        Merk Sepedamotor: {{ $p->merksepedamotor }} <br/>
		Stock Sepedamotor: {{ $p->stocksepedamotor }} <br/>
		Tersedia: {{ $p->tersedia }} <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
@endsection
