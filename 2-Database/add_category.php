<?php require_once "header.php" ?>

<?php

    if(isset($_POST["ad"])){
        if(empty($_POST["ad"])){
            echo "Kategori alanı boş geçilemez";
        }else{

        $sorgu = $db -> prepare("INSERT INTO kategoriler SET 
        ad=?");
        $ekle = $sorgu -> execute([
            $_POST["ad"]
        ]);

        if($ekle){
            header("Location:index.php?sayfa=kategoriler");
        }else{
            echo "Bir hata oluştu ve kayıt edemedik.";
            }
        }
    }

?>

<form action="" method="post">

    Kategori Adı: <br>
    <input type="text" name="ad"> <br><br>
    <button type="submit">Gönder</button>

</form>