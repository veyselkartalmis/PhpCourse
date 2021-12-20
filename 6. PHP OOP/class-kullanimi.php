<?php

    class Uye{
        public $ad;
        public $soyad = "Kartalmış";

        function adGoster(){
            return $this ->ad; //Classta daha önce varolan değişkene ulaşmak için this kullanılır.
        }
        function soyadGoster(){
            return $this ->soyad;
        }
        function ismiYaz(){
            return $this ->ad . " " . $this ->soyad;
        }
        function topla($sayi1,$sayi2){
            return $sayi1 + $sayi2;
        }
    }

    $uye = new Uye;
    $uye ->ad = "Veysel"; //Classtaki değişkene aktarma yapabiliyorum.
    echo $uye -> adGoster() . "<br>";
    echo $uye -> soyadGoster() . "<br>";
    echo $uye -> ismiYaz() . "<br>";
    echo $uye -> topla(15,5);

?>