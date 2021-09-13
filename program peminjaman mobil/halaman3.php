<?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $kelamin = $_POST['kelamin'];
        $agama = $_POST['agama'];
        $namamobil = $_POST['namamobil'];
        $jenismobil = $_POST['jenismobil'];
        $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
        $nomobil = $_POST['nomobil'];
        $tanggalkembali = $_POST['tanggalkembali'];
        $supir = $_POST['supir'];
        $penjamin = $_POST['penjamin'];
        $tanggalpengembalian = $_POST['tanggalpengembalian'];
   
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
} 
 
?>
<html>
<fieldset>
    <table border=5 width=100% align=”center”>
        <tr><th colspan="6">Data Diri</th></tr>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>NIk</th>
            <th>Agama</th>
            
            <th colspan="2">Penjamin</th>
            <tr>
                <td><?php echo "$nama"; ?> </td>
                <td><?php echo "$nik"; ?> </td>
                <td><?php echo "$kelamin"; ?> </td>
                <td><?php echo "$agama"; ?> </td>
                <td colspan="2"><?php echo "$penjamin"; ?></td>
                <!-- <td><?php echo "$tanggalpeminjaman"; ?> </td>
                <td><?php echo "$tanggalpengembalian"; ?> </td> -->

            </tr>

        </tr>
        
        <tr>
            <th colspan="6">data Rental Mobil</th>
        </tr>
        <tr>
        <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Menggunakan Supir</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           

        </tr>
        <tr>
            <th colspan="6">Rncian Biaya</th>
        </tr>
        <tr>
            <th colspan="5" align="left">Lama Pinjaman</th>
            <td></td>
        </tr>
        <tr>
            <th colspan="5" align="left">Biaya Harian</th>
            <td></td>
        </tr>

        <tr>
            <th colspan="5" align="left">Telat Mengembalikan</th>
            <td></td>
        </tr>
        <tr>
            <th colspan="5" align="left">Denda</th>
            <td></td>
        </tr>
        <tr>
            <th colspan="6">Total Biaya</th>
        </tr>

        <tr>
            <th colspan="5" align="left">Total Biaya(Lama Pinjaman * Harian</th>
            <td></td>
        </tr>
        <tr>
        <th colspan="5" align="left">Total Denda(Telat Mengembalikan  * Biaya Denda</th>
            <td></td>
        </tr>
        <tr>
            <th colspan="6">Pembayaran</th>
        </tr>

        <tr>
            <th colspan="5" align="left">Total Pembayaran(Biaya Telat + Total Denda </th>
            <td></td>
        </tr>

        

        
    </table>
    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    
    <button  onclick="window.print()" >Print</button>
    
    

</div>
</fieldset>
</html>