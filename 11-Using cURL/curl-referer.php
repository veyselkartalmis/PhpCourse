<?php

    $ch = curl_init();
    curl_setopt_array($ch,[
        CURLOPT_URL => "http://localhost/11.%20cURL%20Kullanimi/cURL%20Referer/baglanti.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_REFERER => "https://wikipedia.org" //Bu ayar, hedef siteye hangi siteden geldiğimizi belirttiğimiz ayar. 
    ]);
    $source = curl_exec($ch);
    curl_close($ch);
    echo $source;

?>