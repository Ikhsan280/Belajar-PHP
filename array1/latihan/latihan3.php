<?php
    $data = [
        ["dosen" => "Aceng Fikri",
         "submenu" => [
            [ "nama" => "Asep Goloq",
            "MataKuliah" => [
            ["MataKuliah" => "Hukum"],
            ["MataKuliah" => "Akuntasi"],
            ["MataKuliah" => "Sastra"]],

            "Hobi" => [
            ["Hobi" => "Membaca Buku"],
            ["Hobi" => "Menonton Film"]]],

            [ "nama" =>
             "Engkus Matrial",
            "MataKuliah" => [
            ["MataKuliah" => "Agama"],
            ["MataKuliah" => "Ekonomi"],
            ["MataKuliah" => "Sastra"]],
            
            "Hobi" => [
            ["Hobi" => "Mendaqi"],
            ["Hobi" => "Bernang"]]],

            [ "nama" => "Emul Codet",
            "MataKuliah" => [
            ["MataKuliah" => "Manager"],
            ["MataKuliah" => "Perhotelan"],
            ["MataKuliah" => "PAI"]],

            "Hobi" => [
            ["Hobi" => "Bermain Game"],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", 
        "submenu" => [
            [ "nama" => "Udil Pitaq",
            "MataKuliah" => [
            ["MataKuliah" => "Bahasa"],
            ["MataKuliah" => "Akupuntur"],
            ["MataKuliah" => "Hukum"]],

            "Hobi" => [
            ["Hobi" => "Gamers"],
            ["Hobi" => "Menonton Film"]]],

            [ "nama" =>
             "Nanang Pelk",
            "MataKuliah" => [
            ["MataKuliah" => "Hukum"],
            ["MataKuliah" => "Seharah"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Travel"],
            ["Hobi" => "Berenang"]]],

            [ "nama" => "Ade Londok",
            "MataKuliah" => [
            ["MataKuliah" => "Multimedia"],
            ["MataKuliah" => "IT"],
            ["MataKuliah" => "Program"]],

            "Hobi" => [
            ["Hobi" => "Menonton"],
            ["Hobi" => "Gamers"]]],
        ]
        ],
    ];
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan</title>
    </head>
    <body>
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
        }
        ?>
        </td>
            </tr>
        
        </table>
    </body>
    </html>