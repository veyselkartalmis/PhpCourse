<?php

    function say(){
        static $sayi = 1;
        echo $sayi."<br>";
        $sayi++;
    }

    say();
    say();
    say();
    say();
    say();
    say();
    say();
    say();
    
?>