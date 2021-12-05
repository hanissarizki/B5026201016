<html>
<head>
  <title>Bilangan Pangkat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    function pangkat($angka, $pangkat) {
        $hasil = 1;
        for ($i = 1; $i <= $pangkat; $i++)
        {
            $hasil = $hasil * $angka;
        }
        return $hasil;
    }
    $angka = $_GET['angka'];
    $pangkat = $_GET['pangkat'];
    $hasil = pangkat ($angka, $pangkat);
    echo "<b>Hasil perpangkatan adalah</b> " .$hasil;
    ?>
</body>
</html>
