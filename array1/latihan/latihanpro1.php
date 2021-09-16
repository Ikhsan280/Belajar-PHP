<?php
if(isset($_POST['save']))
{
    $nama = $_POST ['nama'];
    $kelas = $_POST ['kelas'];
    $nilai = $_POST ['indo'];
    $mtk = $_POST ['mtk'];
    $ing = $_POST ['inggris'];
    $ipa = $_POST ['ipa'];
    $totalnilai = 0;
    $keterangan = "";
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
    <fieldset>
        <legend>Data Siswa</legend>
        <table border=2>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Bahasa Indonesia</th>
                <th>Matematika</th>
                <th>Bahasa Inggris</th>
                <th>IPA</th>
                <th>Total Nilai</th>
                <th>Keterangan</th>
            </tr>

            <?php

                $no =1;
                for($i=0; $i < count($nama); $i++){ ?>
                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $kelas[$i]; ?></td>
                <td><?php echo $nilai[$i]; ?></td>
                <td><?php echo $mtk[$i]; ?></td>
                <td><?php echo $ing[$i]; ?></td>
                <td><?php echo $ipa[$i]; ?></td>
                
                
                <?php

                    $totalnilai = $nilai[$i] + $mtk[$i] + $ing[$i] + $ipa[$i];
                    if ( $totalnilai > 340 ){
                        $keterangan ."Diterima";
                    } else  $keterangan . "tidak diterrima";

                    echo "<td>" .$totalnilai ."</td> ";
                    echo "<td>" .$keterangan  . "</td> ";
                ?>

                </tr>
                <?php } ?>
                
        </table>
    </fieldset>
</body>
</html>