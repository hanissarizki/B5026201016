@extends('layout.ceria')

@section('tittle','ABSEN PEGAWAI')

@section('isikonten')
    <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>ABSEN PEGAWAI</title>
    </head>
<body class="container m-4">

	<h3>Data Pegawai</h3>

	<a href="absen/tambah"> + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
        <form action="absen/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan id pegawai .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama Pegawai</th>
            <th>Tanggal</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td style="width: 10%">{{ $p->pegawai_nama }}</td>
            <td style="width: 10%">{{ $p->Tanggal }}</td>
			<td style="width: 8%">
                <a href="absen/view/{{ $p->ID }}" class="btn btn-warning" >View Detail</a>

				<a href="absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $absen->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@endsection
