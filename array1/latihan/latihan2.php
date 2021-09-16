<?php
    $data = [
        ["dosen" => "Aceng Fikri", 
        "submenu" => [
                 [ "nama" => "Kardi",
                "MataKuliah" => [
                ["MataKuliah" => "Biologi"],
                ["MataKuliah" => "IT"],
                ["MataKuliah" => "FISIKA"]
            ],
            "Hobi" => [
                ["Hobi" => "Game"],
                ["Hobi" => "Balet"]
                ]
            ],

            [ "nama" => "Kusno",
                "MataKuliah" => [
                ["MataKuliah" => "Sastra"],
                ["MataKuliah" => "Sejarah"],
                ["MataKuliah" => "Hukum"]
            ],
            "Hobi" => [
                ["Hobi" => "Berenang"],
                ["Hobi" => "Makan"]
                ]
            ],

            [ "nama" => "Kimoi",
            "MataKuliah" => [
                ["MataKuliah" => "Bisnis"],
                ["MataKuliah" => "Manajemen"],
                ["MataKuliah" => "Administrasi"]
            ],
            "Hobi" => [
                ["Hobi" => "Mancing"],
                ["Hobi" => "Main Bola"]
                ]
            ],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Ajat Bedog",
            "MataKuliah" => [
                ["MataKuliah" => "Hukum"],
                ["MataKuliah" => "Sastra"],
                ["MataKuliah" => "Akuntasi"]
            ],
            "Hobi" => [
                ["Hobi" => "Renang"],
                ["Hobi" => "Nari"]
                ]
            ],

            [ "nama" => "Yayan Pelk",
            "MataKuliah" => [
                ["MataKuliah" => "Ekonomi"],
                ["MataKuliah" => "Sejarah"],
                ["MataKuliah" => "Hukum"]
            ],
            "Hobi" => [
                ["Hobi" => "menari"],
                ["Hobi" => "Membaca"]
                ]
            ],

            [ "nama" => "Aldi Codet",
            "MataKuliah" => [
                ["MataKuliah" => "Perhotelan"],
                ["MataKuliah" => "Manajemen"],
                ["MataKuliah" => "Administrasi"]
            ],
            "Hobi" => [
                ["Hobi" => "Membaca"],
                ["Hobi" => "Nulis"]
                ]
            ],
        ]
        ],
    ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['MataKuliah'] as $sub) {
                echo "<li>". $sub['MataKuliah']. "</li>";
            }
            echo "</ol>";
        } 
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
        echo "</ul>";
    }
?>