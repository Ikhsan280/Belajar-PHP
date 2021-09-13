<?php

class ucapan
{
    public function siang()
    {
        return "Selamat Siang";
    }
    public function sore()
    {
        return "Selamat Sore";
    }
    public function malam()
    {
        return "Selamat Malam";
    }
    public function __construct()
    {
        echo "Selamat Pagi <br>";
    }
}

$selamat = new Ucapan();
echo $selamat -> siang(). "<br>";
echo $selamat -> sore() . "<br>";
echo $selamat -> malam();