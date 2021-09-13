 <?php

// function parameter
// Nilai yang bisa dimasukan kedalam fungsi / sebuah nilai
// Yang bisa ditentukan
function LuasSegitiga($a, $b)
{
    $alas= $a;
    $tinggi= $b;
    $luas = ($alas * $tinggi )/ 2;
    return $luas;
}

echo "Luas Segitiga : " . LuasSegitiga(10, 8);