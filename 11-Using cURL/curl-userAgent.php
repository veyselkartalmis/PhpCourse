<?php

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => "https://eniyidiziler.com",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERAGENT => "Mozilla/5.0 (Linux; <Android Version>; <Build Tag etc.>) AppleWebKit/<WebKit Rev> (KHTML, like Gecko) Chrome/<Chrome Rev> Mobile Safari/<WebKit Rev>"
    ]);
    $source = curl_exec($ch);
    curl_close($ch);
    echo $source;
?>