<html>
<head>
    <title>Tugas Customize jQuery Event</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#start").mouseenter(function(){
                alert("Selamat datang! Silakan isi formulir pendaftaran!");
            });
            $("input").focus(function(){
                $(this).css("background-color", "yellow");
            });
            $("input").blur(function(){
                $(this).css("background-color", "grey");
            });
            $("button").click(function(){
            });
        });
    </script>
</head>
    <body>
    <p id="start">Here</p>
    <h1><b>Formulir Pendaftaran Vaksinasi Kota Kediri</b></h1>
    Nama            : <input type="text" name="namalengkap"><br><br>
    NIK             : <input type="text" name="NIK"><br><br>
    Tanggal Lahir   : <input type="text" name="tanggallahir"><br><br>
    No HP           : <input type="text" name="nohp"><br><br>
    Alamat          : <input type="text" name="alamat"><br><br>
    Email           : <input type="text" name="email"><br><br>
    <button>Kirim data</button>
    </body>
</html>
