<?php

    function test(){
        echo "merhaba";
    }

    if(function_exists("test")){
        echo "Test fonksiyonu var";
    } else{
        echo "Test fonksiyonu yok";
    }

?>