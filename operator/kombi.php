<?php

    $a = 85;
    $b = 83;
    $akademik = $a < 85;
    $atletik = $b < 83;    
    $jawab = $a >= 85 && $b >= 83 ? "lulus" : "tidak lulus";
    
    
    echo "nilai akadmik : " .$a. "<br>";
    echo "nilai atletik : " .$b. "<br>";
    echo "dinyatakan : " .($jawab)


?>