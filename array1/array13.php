<?php

$artikel [
    [
        "judul" => "Belajar PHP & MYSQL untuk pemula",
        "penulis" => "petani kode"

    ],
    [
        "judul" => "Tutorial PHPH dari nol hingga mahir",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Membuat aplikasi web dengan PHP",
        "penulis" => "petanikode"
    ]
];

foreach($artikel as $post){
    echo "<h2>". $post ["judul"]."</h2>";
    echo "<p>" . $post ["penulis"]. "</p>";
    echo "<hr>";
}