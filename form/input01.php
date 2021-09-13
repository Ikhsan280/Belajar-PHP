<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" METHOD="POST" name="input">
        Nama anda : <input type="text" name="nama"><br>
        <input type="submit" name="input" value = "input">
</body>
</html>

<?php

    if (isset ($_POST['input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b> $nama </b>";
    }

?>