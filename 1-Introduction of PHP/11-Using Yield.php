<?php

    function say($basla,$bitir){
        for($i=$basla; $i <= $bitir; $i++ ){
            yield $i;
        }
    }

    $sayilar = say(0,100);
    
    foreach($sayilar as $sayim){
        echo $sayim."<br>";
    }

?>