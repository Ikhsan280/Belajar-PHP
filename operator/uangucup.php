<?php

    $uangucup = 100000;
    $minum = 15000;
    $sosis = 25000;


    echo "Ucup mempunyai uang <b>$uangucup</b>";
    echo "<hr>";

    $uangucup -= $minum;
    echo "jajan minum <b>".$minum."</b>";
    echo "<br>sisa uang Ucup jajan minum = <b>".$uangucup."</b>";
    echo "<hr>";

    $uangucup -= $sosis;
    echo "jajan sosis bakar <b>".$sosis."</b>";
    echo "<br>sisa uang Ucup jajan sosis + minum = <b>".$uangucup."</b>";
    echo "<hr>";

    $sedekah = $uangucup * 0.1;
    echo "sedekah ke musafir 10% dari  <b> ".$uangucup."</b>";
    $uangucup -= $sedekah;
    echo " yaitu sebesar <b> ".$sedekah."</b>";
    echo "<br>sisa uang Ucup <b>".$uangucup."</b>";
    

    $get = $uangucup * 0.5;
    echo "<hr>";
    echo "ucup mendapatkan uang di jalan sebesar 50% dari sisa uang Ucup <br><b>".$uangucup."</b>";
    $uangucup += $get;
    echo " yaitu sebesar <b>".$get. "</b>";
    echo "<hr>";
    echo "sisa uang Ucup sekarang ";
    echo "<b>".$uangucup."</b>";
    echo "<hr>";

?>