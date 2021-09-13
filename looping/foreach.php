<?php

$books = [
    "pendahuluan Belajar PHP untuk pemula",
    "membangun aplkasi WEB dengan PHP",
    "Tutorial php dan mysql",
    "Membuat chat bot dengan php",
];

    echo "<h5>Judul Buku</h5>";
    echo "<ul>";
    foreach ($books as $buku) {
        echo "<li>$buku</li>";
    }
    echo "</ul>"; 


?>