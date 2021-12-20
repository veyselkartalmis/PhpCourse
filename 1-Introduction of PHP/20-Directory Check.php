<?php

    mkdir("deneme");
    if(file_exists("deneme")){
        echo "Deneme klasörü mevcut";
    }
    else{
        echo "Deneme klasörü mevcut değil";
    }

?>