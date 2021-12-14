@extends('layout.ceria')

@section('tittle','DAFTAR PEGAWAI')

@section('isikonten')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

    <h3>Data Pegawai</h3>

	<a href="pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
        <form action="pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td style="width: 12%">{{ $p->pegawai_nama }}</td>
			<td style="width: 12%">{{ $p->pegawai_alamat }}</td>
			<td style="width: 8%">
                <a href="pegawai/view/{{ $p->pegawai_id }}">View Detail</a>

				<a href="pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}

</body>
@endsection
