@extends('layout.ceria')

@section('tittle','MUTASI PEGAWAI')

@section('isikonten')
<head>
	<title>Tugas Laravel Query Builder</title>
</head>
<body>

	<h2>Data Mutasi Pegawai</h2>

	<a href="mutasi/tambah"> + Tambah Pegawai Mutasi Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
        <form action="mutasi/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai Mutasi berdasarkan id pegawai .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>

	<table border="1">
		<tr>
			<th>Nama Pegawai</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $p)
		<tr>
			<td style="width: 10%">{{ $p->pegawai_nama }}</td>
			<td style="width: 10%">{{ $p->Departemen }}</td>
			<td style="width: 8%">
                <a href="mutasi/view/{{ $p->ID }}">View Detail</a>

				<a href="mutasi/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="mutasi/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $mutasi->links() }}

</body>
@endsection
