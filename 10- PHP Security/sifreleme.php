<?php

    $sifre = "Veysel123";
    echo password_hash($sifre, PASSWORD_DEFAULT);
    $hash ="$2y$10$2AkOCglHxhG1tE1Mnh4lR.h7BqyP4zI1uFGyDYzrjQyEaVQq.KX/a"; //Şifrelenmiş hal. Sürekli değişir.

    if(password_verify($sifre ,$hash)){
        echo "\nŞifre Doğru";
    }
    

?>