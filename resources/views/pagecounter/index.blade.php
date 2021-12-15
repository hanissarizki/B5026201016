<head>
	<title>5026201016 - HANISSA RIZKI KURNIA</title>
</head>
<body>

    <h3>5026201016 - HANISSA RIZKI KURNIA</h3>



	<table>
		<tr>
			<th>Anda Pengunjung ke:</th>
		</tr>
		@foreach($pagecounter as $p)
		<tr>
			<td {{ $p->Jumlah }}</td>
		</tr>
	</table>

</body>