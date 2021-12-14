<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
	body {
        font-family: serif;
        font-size: 20px;
        background-color:thistle;
    	}
        .sidebar {
          height: 100%;
          position: fixed;
          z-index: 1;
          background-color:#5f51b8;
          overflow-x: hidden;
          transition: 0.1s;
          padding-top: 50px;
        }
        .sidebar a {
          padding: 8px 8px 8px 32px;
          font-size: 25px;
          color: #949da1;
          display: block;
          transition: 0.3s;
        }
        .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        .header {
            text-align: center;
            font-size: 8px;
            background-color:rgb(70, 16, 70);
            color:white;
            padding: 10px 15px;
        }
        .footer {
            text-align: center;
            font-size: 8px;
            background-color:rgb(26, 1, 26);
            color:white;
            padding: 10px 15px;
        }
        .openbtn {
            text align: center;
            font-size: 20px;
            cursor: pointer;
            background-color:rgb(36, 2, 36);
            color: white;
            padding: 10px 15px;
            border: none;
        }
        .openbtn:hover {
          background-color: rgb(66, 104, 148);
        }
        #menu {
          transition: margin-right .5s;
          padding: 16px;
        }

        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
        </style>
</head>
<body class="container m-4">
	<div id="konten" class="sidebar">
		<a href="javascript:void(0)" class="openbtn" onclick="openNav()">Main Menu</a>
		<a href="http://localhost/B5026201016/public/pegawai">Pegawai</a>
		<a href="http://localhost/B5026201016/public/absen">Absen</a>
		<a href="http://localhost/B5026201016/public/mutasi">Mutasi</a>
		<a href="http://localhost/B5026201016/public/sepedamotor">Sepedamotor</a>
	</div>

	<div id="menu">
		<div class="container">
			<div class="header">
			<img src="{{url('foto1.jpg')}}" alt="Image" width="90" height="120" />
			<h1>5026201016</h1>
            <h1>Hanissa Rizki Kurnia</h1>
			</div><hr>


		@section('isikonten')
		@show
		<br><br><br><br><hr>
		<div class ="footer">
		  <h1>Hak Cipta oleh 5026201016 - Hanissa Rizki Kurnia</h1>
		</div>

	  </div>

	  <script>
	  function openNav() {
		document.getElementById("konten").style.width = "250px";
		document.getElementById("menu").style.marginLeft = "250px";
	  }
	  </script>

</body>
</html>
