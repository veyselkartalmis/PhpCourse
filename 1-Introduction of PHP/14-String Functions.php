<?php

    $metin = "Veysel Kartalmış";
    echo strlen($metin)."<br>";
    echo strstr($metin,"Kartal")."<br>";
    echo strpos($metin,"K")."<br>";
    echo ucwords("merhaba arkadaşlar")."<br>";
    echo ucfirst("merhaba arkadaşlar")."<br>";
    echo strtolower("MERHABA ARKADASLAR")."<br>";
    echo strtoupper("merhaba arkadaslar")."<br>";
    echo trim("             merhaba")."<br>";
    echo ltrim("        merhaba")."<br>";
    echo rtrim("merhaba             ")."<br>";
    echo substr($metin,1,6)."<br>";
    echo str_replace("Veysel","Berat",$metin)."<br>";
    echo str_repeat("*",10);
    
?>