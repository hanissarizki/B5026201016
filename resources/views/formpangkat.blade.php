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
    <div class="container">
        <h2>Menghitung Nilai Bilangan Pangkat</h2><br>
        <form action="prosespangkat" method="get" name="perhitunganbilanganpangkat">
        <table>
            <tr>
                <td>Masukkan Angka</td>
                <td>=</td>
                <td><input class="angka" size="20" name="angka"></td>
            </tr>
            <tr>
                <td>Masukkan Pangkat</td>
                <td>=</td>
                <td><input class="pangkat" size="20" name="pangkat"></td>
            </tr>
            <tr>
                <td><input name="hitung" type="submit" value="Hitung"></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>
