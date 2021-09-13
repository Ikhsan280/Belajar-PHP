<?php

    $a = 1;
    $b = 10;
    $c = 9;
    $d = 11;


    echo "<hr>";

    echo "$a < $b :". ($a < $b);
    echo "<br> ($c > $b) && ($b > $c): "
                . (($c > $b) && ($a > $b));

    echo "<br> ($b > $d) || ($c < $b):"
                .(($a > $b) || ($c < $b));

    echo "<hr>";


    $tono = 10000;
    $tini = 8000;
    $toni = 15000;

    echo " (uang Toni $toni > uang Tono $tono) && (uang Toni $toni > uang Tini $tini) :  " 
            .(($toni > $tono) && ($toni > $tini));

    echo "<br> (uang toni $toni < uang Tini $tini) && (uang Toni $toni != uang Tono $tono) : "
            .(($toni < $tini) && ($toni != $tono));
                
    echo "<hr>";

    $username = "sawadikap";
    $pass = 123;

    echo "masukan username : $username";
    echo "<br> masukan password : $pass";
    echo "<br> login "
        .($username != $pass);

    echo "<hr>";
?>