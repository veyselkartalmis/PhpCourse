<?php

    require_once "header.php";

    //ID yoksa veya boşsa index sayfasına yönlendiriyorum.
    if(!isset($_GET["id"]) || empty($_GET["id"]) ){
        header("Location:index.php");
        exit;
    }

    //Oku tuşuna basıldığında ID'yi alıyor ve o ID'nin bilgilerini getiriyor.
    $sorgu = $db -> prepare("SELECT * FROM dersler
    WHERE id=?");
    $sorgu -> execute([
        $_GET["id"]
    ]);

    $ders = $sorgu -> fetch(PDO::FETCH_ASSOC);

    //Ders sorgusunu çalıştırıyorum ve eğer hata verirse tekrardan index sayfasına yönlendiriyorum.
    if(!$ders){
        header("Location:index.php");
        exit;
    }

?>

<h3> 
    <?php echo $ders["baslik"] ?>
</h3>

<hr>

<div>

    <strong>Yayın Tarihi: </strong> <?php echo $ders["tarih"] ?> <br><br>
    <?php echo nl2br($ders["icerik"]) ?>

</div>