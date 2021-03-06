@extends('layout.ceria')

@section('tittle','MUTASI PEGAWAI')

@section('isikonten')
<head>
	<title>Tugas Laravel Query Builder</title>
</head>
<body>

	<h2>Data Pegawai Mutasi</h2>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		Pegawai <select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
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

</body>
@endsection
