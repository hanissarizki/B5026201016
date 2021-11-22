<!DOCTYPE html>
<html>
<head>
	<title>Tugas Laravel Query Builder</title>
</head>
<body>

	<h2>Nama Tabel : Mutasi</h2>

	<a href="/mutasi/tambah"> + Tambah Pegawai Mutasi Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Departemen }}</td>
			<td>{{ $p->SubDepartemen }}</td>
			<td>{{ $p->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
