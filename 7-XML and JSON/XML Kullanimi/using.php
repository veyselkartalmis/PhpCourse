<?php

    $xml = "<Bilgiler>

    <Ad>Veysel</Ad>
    <Soyad>Kartalmış</Soyad>
    <İs>
        <İsyeri>
            <firma>Ugetam AŞ</firma>
            <pozisyon>Stajer</pozisyon>
        </İsyeri>

        <İsyeri>
            <firma>Halley Oyuncak</firma>
            <pozisyon>E-Ticaret</pozisyon>
        </İsyeri>
    </İs>

</Bilgiler>";

    $xml = simplexml_load_string($xml); //String XML formatını PHP'ye uygun olarak çevirir.
    $xmlfile = simplexml_load_file("Veysel-Bilgiler.xml"); //XML formatındaki dosyayı PHP'ye çevirir.
    
    print_r($xmlfile);

?>