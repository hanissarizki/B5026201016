@extends('layout.ceria')

@section('tittle','SEPEDAMOTOR')

@section('isikonten')
    <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>SEPEDAMOTOR</title>
    </head>
<body class="container m-4">

	<h3>Data Sepedamotor</h3>

	<a href="sepedamotor/tambah"> + Tambah Data Sepedamotor Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
        <form action="sepedamotor/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Sepedamotor berdasarkan merk .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>

	<table class="table table-success table-striped">
		<tr>
			<th>Kode Sepedamotor</th>
			<th>Merk Sepedamotor</th>

			<th>Opsi</th>
		</tr>
		@foreach($sepedamotor as $p)
		<tr>
			<td style="width: 10%">{{ $p->kodesepedamotor }}</td>
			<td style="width: 10%">{{ $p->merksepedamotor }}</td>
			<td style="width: 8%">
                <a href="sepedamotor/view/{{ $p->kodesepedamotor }}">View Detail</a>

				<a href="sepedamotor/edit/{{ $p->kodesepedamotor }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/sepedamotor/hapus/{{ $p->kodesepedamotor }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $sepedamotor->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@endsection
