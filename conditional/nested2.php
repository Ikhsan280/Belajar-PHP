<?php

    $member = "tidak";
    $disc =0;
    $totalbelanja = 50000;
    $totalharga = 0;

    if($member == "ya"){
        if($totalbelanja >= 250000){
            $disc =0.1 * $totalbelanja;
        }else if ($totalbelanja >=100000){
            $disc=0.05 * $totalbelanja;
        }
    } else {
        if($totalbelanja >= 100000){
            $disc = 0.25*$totalbelanja;
        }
    }

    $totalharga = $totalbelanja -$disc;
    echo "kartu member : $member <br>";
    echo "total nelanja : $totalbelanja <br>";
    echo "diskon : $disc <br>";
    echo "total yang harus dibayar : $totalharga";
?>