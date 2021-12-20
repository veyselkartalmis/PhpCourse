<?php

    function Seflink($str){
        // Türkçe karakterler dahil hepsini ufak harfe çeviriyorum
        $str = mb_strtolower($str,"UTF-8");
        // Türkçe karakterleri ayıklıyorum
        $str = str_replace(
            ["ı","ş","ü","ğ","ç","ö"],
            ["i","s","u","g","c","o"],
            $str
        );
        // Yazı ve rakam hariç herşeyi - işaretine döndürüyorum
        $str = preg_replace("/[^a-z0-9]/", "-", $str);
        $str = preg_replace("/-+/", "-", $str);
        // Yazının başında ve sonundaki - işaretini kaldırıyorum
        return trim($str,"-");
    }

    $str = "Benim ıçin 2017 Nasıl geçti???";
    echo Seflink($str);

?>