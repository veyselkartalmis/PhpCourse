<?php

    $yazi = "Galatasaray";
    function yaziKisalt ($yazi,$limit)
    {
        $karakterSayisi = strlen($yazi);
        if ($karakterSayisi > $limit) 
        {
            $yazi = substr($yazi,0,$limit)."...";   
        }
        return $yazi;
    }

    echo yaziKisalt($yazi,5);

?>