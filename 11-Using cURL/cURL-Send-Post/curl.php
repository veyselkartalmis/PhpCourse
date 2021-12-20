<?php

    $ch = curl_init("http://localhost/11.cURL-Kullanimi/cURL-Send-Post/form.php");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => [
            "ad" => "Veysel",
            "soyad" => "Kartalmış",
            "meslek" => "Developer",
            "submit" => 1
        ]
    ]);
    $source = curl_exec($ch);
    curl_close($ch);
    echo $source;


?>