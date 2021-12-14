@extends('layout.ceria')

@section('tittle','ABSEN PEGAWAI')

@section('isikonten')

	<h3>Edit Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
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
		Status
            <input type="radio" id="hadir" name="status" value="H">
            <label for="hadir">HADIR</label></br>
            <input type="radio" id="tidak" name="status" value="T" checked="checked">
            <label for="tidak">TIDAK HADIR</label></br>
		    <input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
