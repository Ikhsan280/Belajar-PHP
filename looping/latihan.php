<?php

    echo "<hr>";
    // no1
    echo "NO 1 <br>";
    $i=2;
    do {
        echo "$i ";
        $i*=2;
    } while ($i <= 130);

    echo "<br>";

    echo "<hr>";

    //no2
    echo "NO 2 <br>";
    $i=3125;
        do {
    echo "$i ";
    $i/=5;
    } while ($i >= 5);

    echo "<br>";
    echo "<hr>";

    //no3
    echo "NO 3 <br>";
    $books = [
        18, 45,29,61,47,34
    ];

    foreach ($books as $buku) {
        $sisabagi = $buku % 3;
        echo "$buku % 3 = $sisabagi<br>";

    }

    echo "<hr>";

    //no4
    echo "NO 4 <br>";
    for ($i=1; $i < 6; $i++){
        for ($a=1; $a < $i; $a++){
            echo "*";
        }
        echo "<br>";
    }    

    echo "<hr>";

    //no5
    echo "NO 5 <br>";
    for ($i=1; $i < 6; $i++){
        for ($a=5; $a >= $i; $a-=1){
            print ("&nbsp");
        }
        for ($c=1; $c <= $i; $c++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    echo "NO 6 <br>";
   

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


    echo "NO 7 <br>";
    $n=3;
    $row=7;
        for ($i=1; $i<=$row; $i++){
            for ($a=1; $a<=$i; $a++){
                echo " ";
            echo " ";
            echo "$n";
            ++$n;   }
            
            echo "<br>";
        }
    

?>