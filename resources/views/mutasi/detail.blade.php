@extends('layout.ceria')

@section('tittle','DAFTAR MUTASI PEGAWAI')

@section('isikonten')

<body>

    <h3>Detail Data Mutasi Pegawai</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $p)
		{{ csrf_field() }}
        ID Pegawai: {{ $p->IDPegawai }} <br/>
		Departemen: {{ $p->Departemen }} <br/>
		Sub Departemen: {{ $p->SubDepartemen }} <br/>
        Mulai Bertugas: {{ $p->MulaiBertugas }} <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
@endsection
