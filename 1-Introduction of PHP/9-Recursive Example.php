<?php

    $arr = [
        'ad' => "Veysel",
        'soyad' => "Kartalmış",
        'sporlar' => [
            'yuzme' => "evet",
            'kosma' => "evet",
            'savunma_sporlari' => [
                'jeetkunedo' => "evet",
                'judo' => "hayır"
            ]
        ]
    ];

    function dizide_bul($dizi,$anahtar)
    {
        foreach($dizi as $key => $val)
        {
            if ($key == $anahtar) //fonksiyona gönderdiğim kelime key ile aynı ise yazdırır.
            {
                return $val;    
            }
            if (is_array($val)) //eğer gönderdiğim kelime dizi ise tekrar içerisine girer. 
            {
                $sonuc = dizide_bul($val,$anahtar); //içine girdiği dizide fonksiyonu tekrar uygular
                if($sonuc)
                {
                    return $sonuc; // sonuç eğer dizide varsa bana keyini gönderir.
                }
            }
        }
        return false;
    }

    echo dizide_bul($arr,'judo');

?>