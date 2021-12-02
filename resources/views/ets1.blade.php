<html>
<head>
    <title>Ujian Tengah Semester Ganjil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        p {text-align: center;}
        p {font-size: 20px;}
        input[type=submit] {
            background-color: blue;
            border: none;
            color: white;
            padding: 8px 40px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        input[type=reset] {
            background-color: lightgreen;
            border: none;
            color: black;
            padding: 8px 40px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <p1></p1>
        <p1><b>Hanissa Rizki Kurnia<br>Hanissa<br>5026201016</b></p1><br>
        <p><b>Form Pendaftaran Kuota Internet</b></p>
        <form class="form-horizontal" action="https://www.w3schools.com">
            <div class="form-group">
                <label class="control-label col-sm-5" for="name">Nama Mahasiswa :</label>
                <div class="col-sm-4">
                <input type="text" pattern="[A-Za-z]+" class="form-control" id="name" name="name" minlength="2" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="nrp">NRP Mahasiswa :</label>
                <div class="col-sm-4">
                <input type="number" pattern="[0-9]{10}"class="form-control" id="nrp" name="nrp" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="jurusan">Jurusan :</label>
                <div class="col-sm-4">
                <select class="form-control" required>
                    <option value="" selected="jurusan"></option>
                    <option>Sistem Informasi</option>
                    <option>Elektro</option>
                    <option>Informatika</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="nomorhp">Nomor Handphone :</label>
                <div class="col-sm-4">
                <input type="number" pattern="[0-9]+" class="form-control" id="nomorhp" name="nomorhp" minlength="10" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5">
                  <input type="submit" value="Submit">
                  <input type="reset" value="Reset">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
