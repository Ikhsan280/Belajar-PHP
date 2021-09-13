<?php

    echo "NO 1 <br>";
$plus =0;
for ($i=2; $i <= 6; $i++){
    $plus += 1;
    for ($j=1; $j <6; $j++){
        echo $j + $plus. " ";
    }
    echo "<br>";
}
    echo "<br>";

    echo "<hr>";



    echo "NO 2 <br>";
    $z=3;
    for ($x=3; $x <=21; $x+=2){
        for ($y = $x; $y <=$z; $y++){
            echo $y . "&nbsp;";
        }
        echo "<br>";
        $z += 2;
        $z =$z +1;
    }

?>