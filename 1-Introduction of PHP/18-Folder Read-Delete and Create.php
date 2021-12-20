<?php

    touch("deneme.txt");
    $icerik = "Bu bir örnektir " . rand(0,1000) . "\n";
    $dosya = fopen("deneme.txt","a");
    fwrite($dosya,$icerik);
    //echo fread($dosya, filesize('test.txt')); DOSYAYI EKRANA YAZDIRMAYA YARAR.
    //while (!feof($dosya)){  DOSYANIN SONUNA GELİNİP GELİNMEDİĞİNE BAKAR 
        //echo fgets($dosya) . '<br>'; SATIR SATIR OKUR
    //}
    //$degerler = file('test.txt');
    //print_r($degerler);
    fclose($dosya);

    //unlink('test2.txt'); DOSYAYI SİLER

    /*
        file_get_contents()
        file_put_contents()
    */

    //$icerik = file_get_contents('http://erbilen.net');
    //echo $icerik;

?>