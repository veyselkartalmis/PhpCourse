<?php

    $kategoriler = [
        [
            'id' => 1,
            'parent' => 0,
            'ad' => "Dersler"
        ],
        [
            'id' => 2,
            'parent' => 0,
            'ad' => "Güncel"
        ],
        [
            'id' => 3,
            'parent' => 0,
            'ad' => "Blog"
        ],
        [
            'id' => 4,
            'parent' => 1,
            'ad' => "HTML dersleri"
        ],
        [
            'id' => 5,
            'parent' => 1,
            'ad' => "CSS dersleri"
        ],
        [
            'id' => 6,
            'parent' => 1,
            'ad' => "PHP dersleri"
        ]
        ,
        [
            'id' => 7,
            'parent' => 4,
            'ad' => "ETİKET KULLANIMI"
        ]
        ,
        [
            'id' => 8,
            'parent' => 4,
            'ad' => "DIV KULLANIMI"
        ],
        [
            'id' => 9,
            'parent' => 4,
            'ad' => "ETİKETLERE ERİŞMEK"
        ]
    ];

    function kategoriListele($kategoriler, $parent=0)
    {
        echo "<ul>";
        foreach($kategoriler as $kategori){
            if ($kategori['parent'] == $parent) { //Parenti sıfır olanları bulur kategoride
                echo  "<li>".$kategori['ad'];
                echo kategoriListele($kategoriler, $kategori['id']); //Parenti sıfır olanların id'sine göre kategoriye atar
                echo "</li>";
            }    
        }
        
        echo "</ul>";
    }

    kategoriListele($kategoriler);

?>