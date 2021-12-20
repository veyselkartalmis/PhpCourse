<?php

    header("Content-type: text/xml");
    $xml = new SimpleXMLElement("<bilgiler/>"); //Bilgiler adında XML oluşturdum
    $xml->addChild("ad","Veysel"); //Alt eleman ekledim
    $xml->addChild("soyad","Kartalmış"); //Alt eleman ekledim
    $siteler = $xml->addChild("siteler"); //Alt eleman ekledim
        $site = $siteler->addChild("site"); //Alt elemana alt eleman ekledim.
            $site->addChild("firma","Ugetam"); //Alt elemanın altına eleman ekledim
            $site->addChild("pozisyon","Staj");
        $site = $siteler->addChild("site");
            $site->addChild("firma","Halley");
            $site->addChild("pozisyon","E-Ticaet");
       
    echo $xml->asXML(); //XML çıktısını verecek olan kod.

?>