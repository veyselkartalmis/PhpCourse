<?php

    session_start();
    ob_start(); // session_start hata verirse bu kodu kullanabilirsin.
    include "ayarlar.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Yap</title>
</head>
<body>

<?php

    if(isset($_SESSION["kullanici_adi"])){
        include "admin.php";
    }else{
        include "giris.php";
    }

?>
    
</body>
</html>