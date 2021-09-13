<?php

function hitungUmur($thn_lahir, $thn_skrng)
{
    $umur= $thn_skrng - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum")
{
    echo $salam . " , ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "saya berusia " . hitungUmur(2003,2022) . "<br>";
    echo "senang berkenalan dengan anda";
}
echo perkenalan("ikhsan");