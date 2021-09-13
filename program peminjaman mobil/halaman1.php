<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Peminjaman Mobil</title>
</head>
<body>
<form action="halaman2.php" method="post">

    <table>
        <tr>
            <td>Nama </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>NIK </td>
            <td> : </td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td> : </td>
            <td><input  type="radio"  name="kelamin" value="laki-laki" >
            laki-laki
            <input type="radio" name="kelamin" value="perempuan"> 
            Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td> : </td>
            <td><select  name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>Nama Mobil</td>
            <td> : </td>
            <td><input  name="namamobil"></td>
        </tr>
        <tr>
            <td>Jenis Mobil </td>
            <td> : </td>
            <td><select  name="jenismobil">
            <option value= 1 > SUV</option>
            <option value= 2 > Convertible</option>
            <option value= 3 > Coupe</option>
            <option value= 4 > MPV</option>
            </select></td>
        </tr>
        <tr>
            <td>Merek Mobil </td>
            <td> : </td>
            <td><select   name="merek">
            <option value= 1 > Toyota</option>
            <option value= 2 > Daihatsu</option>
            <option value= 3 > Honda</option>
            <option value= 4 > Suzuki</option>
            </select></td>
        </tr>
        <tr>
            <td>NO Plat Mobil</td>
            <td> : </td>
            <td><input type="text" name="nomobil"></td>
        </tr>
        <tr>
            <td>Tanggal Peminjaman</td>
            <td> : </td>
            <td><input  type="date" name="tanggalpeminjaman"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td> : </td>
            <td><input  type="date" name="tanggalkembali"></td>
        </tr>
        <tr>
            <td>Penjamin </td>
            <td> : </td>
            <td><select  name="penjamin">
            <option value= 1 > fc ktp</option>
            <option value= 2 > fc sim</option>
            <option value= 3 > fc kk</option>
            </select></td>
        </tr>
        <tr>
            <td>Menggunkan Supir </td>
            <td> : </td>
            <td><select type="text" name="supir" >
            <option value= 1 > Ya</option>
            <option value= 2 > Tidak</option>
            </select></td>
        </tr>



<tr></tr>

        <tr>
        <td></td><td></td>
            <td><input type="submit" name="proses"></td>
        </tr>
        

     
 </form>
 </table>
</body>
</html>