@extends('layout.ceria')

@section('tittle','DAFTAR PEGAWAI')

@section('isikonten')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

    <h3>Detail Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
		{{ csrf_field() }}
		ID Pegawai: {{ $p->pegawai_id }} <br/>
        Nama: {{ $p->pegawai_nama }} <br/>
		Jabatan: {{ $p->pegawai_jabatan }} <br/>
		Umur: {{ $p->pegawai_umur }} <br/>
		Alamat: {{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
@endsection
