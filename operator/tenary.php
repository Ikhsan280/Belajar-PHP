<?php

    $tahun = date ('y');
    $kabisat = $tahun % 4 == 0;
    $jawab = $kabisat ? "iya" : "bukan tahun kabisat";
    
    echo $tahun . "<br>";
    echo "tahun kabisat :". ($jawab);
    echo "<br>";

?>