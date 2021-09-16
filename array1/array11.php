<?php

    $hobi = [
        "Membaca",
        "Menulis",
        "NgeBlog",
    ];

    //menambahkan isi pada index ke 3

    $hobi[3] = "coding";

    //menghapus isi array

    unset($hobi[1]);

    // menambahkan isi pada index terakhir

    $hobi[] = "Olahraga";

    //cetak array dengan perulangan

    foreach($hobi as $hobiku){
        echo $hobiku . "<br>";
    }
?>