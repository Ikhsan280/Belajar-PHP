<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses06.php" method = "POST" name ="input">
        <h2>Pilih jurusan anda</h2><br>
        <input type="radio" name = "jurusan" value = "TI" checked>
        Teknik Informatika <br>
        <input type="radio" name = "jurusan" value = "SI" checked>
        Informasi <br>
        <input type="radio" name = "jurusan" value = "SK" checked>
        Kopmputer <br>
        <input type="radio" name = "jurusan" value = "KA" checked>
        Komputer Akuntasi <br>
        <input type="submit" name="pilih" value = "pilih">
    </form>
</body>
</html>