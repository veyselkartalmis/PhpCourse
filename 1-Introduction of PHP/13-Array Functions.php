<?php

    $arr = ["Veysel","Kartalmış","12.12.2019"];
    // print_r($arr); DİZİYİ YAZDIRMAMIZA YARAR
    // var_dump($arr); DİZİYİ DETAYLI YAZDIRIR
       $metin = "Merhaba,arkadaşlar,benim,adım,Veysel";
       $arr = explode(",",$metin); // METİNİ PARÇALAR DİZİYE ATAR
       $metin = implode("|",$arr); // BİR DİZİYİ ARAYA KARAKTER KOYARAK METİNE DÖNÜŞTÜRDÜ
       count($arr); // DİZİDE KAÇ ELEMAN OLDUĞUNU YAZAR
       is_array($metin); // DİZİ Mİ DEĞİL Mİ ONU KONTROL EDER
       shuffle($arr); // DİZİ ELEMANLARINI KARIŞTIRIR
       array_count_values($arr); // TEKRAR EDEN ELEMANLARIN KAÇ KEZ TEKRAR ETTİĞİNİ YAZAR
       array_key_exists("Veysel",$arr); // VERİLEN KEYİ VERİLEN DİZİ ARAR
?>