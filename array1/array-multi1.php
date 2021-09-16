<?php

    $menu = [
        [
            "nama" => "Beranda",
            "subMenu" => [
                [
                    "nama" => "olahraga",
                    "subMenu" => [
                        [
                            "nama" => "Bola"
                        ],
                        [
                            "nama" => "Bulu tangkis"
                        ]
                    ]
                ],
                [
                    "nama" => "Politik",
                    "subMenu" => [
                        [
                            "nama" => "partai banteng"
                        ],
                        [
                            "nama" => "ekonomi"
                        ]
                    ]
                ],
                [
                    "nama" => "Manca Negara",
                    "subMenu" => [
                        [
                            "nama" => "International"
                        ],
                        [
                            "nama" => "World"
                        ]
                    ]
                ]
                
            ]
        ]
      ];


      foreach ($menu as $key =>$val)
        {
            echo $val ['nama'] . "<br>";
            echo "<ul>";
            foreach ($val ['subMenu'] as $menu)
            {
                echo "<li>" .$menu ['nama']. "</li>";
                echo "<ol>";
                foreach ($menu ['subMenu'] as $sub)
                {
                    echo "<li>". $sub['nama']. "</li>";
                }
                echo "</ol>";
            }
            echo "</ul>";
        }
        