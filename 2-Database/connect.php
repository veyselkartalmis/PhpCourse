<?php

    // Veritabanı bağlantısını gerçekleştirdik.
    try{
        $db = new PDO("mysql:host=localhost;dbname=ornek","root","");
    }catch(PDOException $hata){
        echo $hata -> getMessage();
    }

?>