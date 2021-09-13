<?php 
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];
        $jamLembur = 0;
        $gajiLembur = 0;
        $totalPajak = 0;
        function rupiah($angka){
            $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
            return $hasil_rupiah;
        }


        //menghitung jam lembur
        $jamLembur = $jamKerja-173;
        
        //menambahkan jam lebur setiap jam nya
        // for($i = 0; $i<=$jamLembur; $i++){
             $gajiLembur = $jamLembur*20000;
        // }

        //menentukan gaji dan tunjangan berdasarkan golongan
        if($golongan == 1){
            $gajiPokok = 1500000;
            $tunjangan = 150000;
        }else if($golongan == 2){
            $gajiPokok = 2000000;
            $tunjangan = 200000;
        }else if($golongan == 3){
            $gajiPokok = 2500000;
            $tunjangan = 250000;
        }else if($golongan == 4){
            $gajiPokok = 3000000;
            $tunjangan = 300000;
        }else{
            echo "Anda bukan golongan kami";
        }

        //menghitung pajak gaji pokok dan lembur
        $pajakGajiPokok = $gajiPokok * 0.05;
        $pajakGajiLembur = $gajiLembur * 0.05;
        
        //menghitung total Pajak
        $totalPajak = $pajakGajiLembur+$pajakGajiPokok;

        //mengitung total gaji
        $totalGaji = $gajiPokok+$gajiLembur-$totalPajak;
        $gajiKotor = $gajiPokok+$tunjangan+$gajiLembur;
        $gajiBersih = $gajiKotor-$totalPajak;
        //menampilkan
    }
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
    <table border=5; width=100%;>
        <tr><th>Nama</th><th>Jenis kelamin</th><th>Agama</th><th>Golongan</th><th>Jumlah jam kerja</th><th>Jumlah jam lembur</th></tr>
        <tr><td><?php echo"$nama";?></td>
        <td><?php echo"$jk";?></td>
        <td><?php echo"$agama";?></td>
        <td><?php echo"$golongan";?></td>
        <td><?php echo"$jamLembur";?></td>
        <td><?php echo"$jamKerja";?></td>
       </tr>
       <tr><td colspan =6 align=center><b>Keuangan</b></td>
        </tr>
        <tr><td colspan =5> Gaji pokok</td>
        <td><?php echo rupiah ($gajiPokok);?></td>
        </tr>

        <tr><td colspan =5> Tunjangan</td>
        <td><?php echo rupiah ($tunjangan);?></td>
        </tr>

        <tr><td colspan =5> Gaji Lembur</td>
        <td><?php echo rupiah ($gajiLembur);?></td>
        </tr>

        <tr><td colspan =5> Pajak Gaji pokok</td>
        <td><?php echo rupiah ($pajakGajiPokok);?></td>
        </tr>

        <tr><td colspan =5> Pajak Uang Lembur</td>
        <td><?php echo rupiah ($pajakGajiLembur);?></td>
        </tr>

        <tr><td colspan =6 align=center><b>Gaji Kotor</b></td>
        </tr>

        <tr><td colspan="5"> (Gaji pokok + Tunjangan + Uang lembur)</td>
            <td><?php echo rupiah($gajiKotor); ?></td>           
    </tr>
    <tr><td colspan =6 align=center><b>Total pajak</b></td>
        </tr>

    <tr><td colspan="5"> (Pajak Gaji pokok + Pajak lembur)</td>
            <td><?php echo rupiah($totalPajak); ?></td>           
    </tr>
    <tr><td colspan =6 align=center><b>Gaji Bersih</b></td>
        </tr>
    <tr><td colspan="5"> (Gaji kotor - Total pajak)</td>
        <td><?php echo rupiah($gajiBersih); ?></td>  
    </table>
</body>
</html>