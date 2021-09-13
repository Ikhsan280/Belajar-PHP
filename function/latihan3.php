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
        <legend>Formulir</legend>
        <form action="" method="post">
        <tr>
            <td>
             <label for="nama">
             Nama :
            </label>
            </td>
            <td>
            <input type="text" name="nama" required><br>
            </td>
            </tr>
            Jenis Kelamin :
            </td>
            <td>
            <label for="1">
            <input type="radio" name="jk" id="l" value="Laki-laki">
             Laki-laki
             </label>

             <label for="p">
               <input type="radio" name="jk" id="p" value="Perempuan"> Perempuan</label><br>
                </td>
            <td>
                <tr>
                    Tanggal Lahir :
                    <input type="date" name="tanggal"><br>
                </tr>
            </td>
            <tr>
                <td>    
                Pilih Agama :
            </tr>    
            </td>
            <td>
                <select name="agama" required>
                    <option value="">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </td>
            <tr>
               <br> Alamat :
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>
            </tr>
            <br>

            Hobi : <br>
            
                <input type="checkbox" name="hobi[]" value="Membca"> Membaca <br>
                <input type="checkbox" name="hobi[]" value="Bermain"> Bermain <br>
                <input type="checkbox" name="hobi[]" value="Berenang"> Berenang <br>
                <input type="checkbox" name="hobi[]" value="Memasak"> Memasak <br>
                <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga <br>
                <input type="checkbox" name="hobi[]" value="Makan"> Makan <br><br>
             

                   <input type="submit" name="simpan" value="simpan">
            </form>
    </fieldset>
</body>
</html>

<?php 
if(isset($_POST['simpan']))
    {
    $nama = $_POST['nama'];
    $jenis = $_POST['jk'];
    $tglLahir = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];

 function dataDiri($nama,$jenis,$tglLahir,$agama,$alamat,$hobi)
{
$bioData = "Nama : $nama <br>";
$bioData .= "Jenis Kelamin : $jenis <br>";
$bioData .= "Tanggal Lahir : $tglLahir <br>";
$bioData .= "Agama : $agama <br>";
$bioData .= "Alamat : $alamat <br>";
$bioData .= "Hobi : " . implode (",", $hobi);
return $bioData;
}

echo dataDiri ($nama,$jenis,$tglLahir,$agama,$alamat,$hobi);
}
?>