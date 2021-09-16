<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
<legend>Program Masuk Sekolah</legend>
<form action="" method="post">
<table>
<tr>
<th>Masukan Jumlah Data</th>
<td>: <input type="number" name="jumlah"></td>
</tr>
<tr>
<th>
</th>
<td>
    <button type="submit" name="simpan">simpan</button>
    <button type="reset">reset</button>
</td>
</tr>
</form>
</table>
</fieldset>
<?php
if (isset($_POST['simpan']))
{
    $row = 0;
    $row = $_POST['jumlah'];
?>
<fieldset>
<legend>Input Niliai Siswa</legend>
<table>
    <form action="latihanpro1.php" method="post">
<?php
for ($i = 1; $i <= $row; $i++)
{
?>
<tr>
<th colspan="2">data ke-<?php echo $i;?></th>
        <td>Nama</td>
        <td><input type="text" name="nama[]"></td>
</tr>


<tr>
    <th colspan="2"></th>
    <td>Asal Sekolah</td>
    <td><input type="text" name="kelas[]"></td>
</tr>
<tr>
    <th colspan="2"></th>
    <td>Nilai Bahasa Indonesia</td>
    <td><input type="number" min="0" max="100" name="indo[]"></td>
</tr>

<tr>
    <th colspan="2"></th>
    <td>Nilai Matematika</td>
    <td><input type="number" min = "0" max = "100" name="mtk[]"></td>
</tr>

<tr>
    <th colspan="2"></th>
    <td>Nilai Bahasa Inggris</td>
    <td><input type="number" min = "0" max = "100" name="inggris[]"></td>
</tr>

<tr>
    <th colspan="2"></th>
    <td>Nilai IPA</td>
    <td><input type="number" min = "0" max = "100" name="ipa[]"></td>
</tr>
<?php
}
?>
<tr>
<th></th>
<td><button type="submit" name="save">simpan</button></td>

</tr>
</form>
</table>
</fieldset>
<?php
}
?>
</body>
</html>