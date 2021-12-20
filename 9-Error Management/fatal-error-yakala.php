<?php

    error_reporting(E_ALL ^ E_ERROR); //Ölümcül hatalar hariç hepsini al.

    function olumculHata(){
        $hata = error_get_last();
        if($hata["type"] == 1){
            echo $hata["message"];
        }
    }

    register_shutdown_function("olumculHata");
    echo substr();
?>