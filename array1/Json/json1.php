<?php 
  $dataJson = '{
    "nama":"Ujang",
    "domisili":"Bandung",
    "usia":23,
    "wni":true,
    "hobi": [
        "Futsal","Berenang","berlari",
    ]
}';
$data = json_decode($dataJson);
echo "Nama : " . $data->nama . "<br>";
echo "Usia : " . $data->usia . "<br>";
echo "Domisili : " . $data->domisili . "<br>";
echo "Hobi : " . implode(",", $data->hobi);
foreachc($data->hobi as $hobi);
 ?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center>
    <nav>
      <a href="json-api.php">Data</a>
      <a href="json-indonesia.php">Data indonesia</a>
      <a href="json-provinsi.php">Data Provinsi</a>
    </nav>
  </center>
  <fieldset>
    <legend>Data Covid</legend>
    <table border = 2;>
      <tr>
        <th>NO</th>
        <th>Negara</th>
        <th>Positif</th>
        <th>Meninggal</th>
        <th>Sembuh</th>
      </tr>
      <?php

    $data = json_decode($dataCovid);
    foreach ($data as $covid) { ?>

    <tr>
    <td> <?php echo $no++; ?></td>
    <td> <?php echo $covid -> attributes -> Country_Regeions; ?></td>
    <td> <?php echo $covid -> attributes -> Confirmed ?></td>
    <td> <?php echo $covid -> attributes -> Deaths ?></td>
    <td> <?php echo $covid -> attributes -> Recovered ?></td>
    </tr>
    <?php } ?>
    </table>
  </fieldset>
</body>
</html>