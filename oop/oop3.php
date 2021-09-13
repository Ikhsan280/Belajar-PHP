<?php

class kucing
{
    public $warna;

    public function __construct($warna)
    {
        $this -> warna = $warna;
    }
    public function bersuara()
    {
        return "Meong... Meong... Meong...";
    }
    public function berburu()
    {
        return "berburu ikan";
    }
}

$kucing1 = new kucing ("black");
echo "nama kucing : ". $kucing1 -> warna . "<br>";

$kucing2 = new kucing ("pink");
echo "nama kucing : ". $kucing2 -> warna . "<br>";

echo "tru tru tru";