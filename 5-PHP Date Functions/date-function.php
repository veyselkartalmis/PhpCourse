<?php

    $tarih1 = new Datetime();
    $tarih2 = new Datetime("1999-06-15 06:30:44");

    $fark = $tarih2 -> diff($tarih1);
    $tarih = $fark -> format("%y yıl %m ay %d gün %h saat %i dakika %s saniyedir yaşıyorsun.");
    
    //EĞER ARADAN ÇOK ZAMAN GEÖMEMİŞSE O LAR VARSA ONLARI YOK EDİYORUM
    /*
    $tarih = str_replace(
        ["0 yıl","0 ay","0 gün","0 saat","0 dakika"," 0 yıl"," 0 ay"," 0 gün"," 0 saat"," 0 dakika"],
        "",
        $tarih
    );
    */ 
    
    echo $tarih;

?>