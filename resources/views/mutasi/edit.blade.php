@extends('layout.ceria')

@section('tittle','MUTASI PEGAWAI')

@section('isikonten')
<head>
	<title>Tugas Laravel Query Builder</title>
</head>
<body>

	<h2>Edit Mutasi Pegawai</h2>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $p)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Departemen <input type="text" name="departemen" required="required"> <br/>
		Sub Departemen <input type="text" name="subdepartemen" required="required"> <br/>
		<div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Mulai Bertugas :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" />
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
            });
        </script><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
@endsection
