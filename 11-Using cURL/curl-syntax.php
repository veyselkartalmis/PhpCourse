<?php

    //cURL başlatıldı;
    $ch = curl_init();

    //cURL ayarları;
    curl_setopt_array($ch, [
        CURLOPT_URL => "http://veyselkartalmis.site", //Hedef site
        CURLOPT_RETURNTRANSFER => true
    ]);

    //cUrl isteği çalıştırıldı;
    $source = curl_exec($ch);

    //cURL sonlandırıldı;
    curl_close($ch);
    preg_match('/<title>(.*?)<\/title>/', $source, $title);

    //Çektiği değeri yazdırdım;
    print_r($title[1]);

?>