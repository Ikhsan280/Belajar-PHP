<?php 
$dataMhs = '[
    {"nama":"Mahmud","Domisili":"Bandung"},
    {"nama":"Desi","Domisili":"Tasik"},
    {"nama":"Ujang","Domisili":"Cianjur"},
    {"nama":"Entis","Domisili":"Cedok"}
]';

$data = json_decode($dataMhs);
foreach ($data as $mhs) {
    echo "Nama : " . $mhs->nama . "<br>";
    echo "Domisili : " . $mhs->Domisili;
    echo "<hr>";
}