@extends('layout.ceria')

@section('tittle','DAFTAR ABSEN PEGAWAI')

@section('isikonten')

<body>

    <h3>Detail Data Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
		{{ csrf_field() }}
		ID: {{ $p->ID }} <br/>
        ID Pegawai: {{ $p->IDPegawai }} <br/>
		Tanggal: {{ $p->Tanggal }} <br/>
		Status: {{ $p->Status }} <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
@endsection
