<?php

    if(isset($_POST["submit"])){
        $kullanici_adi = $_POST["kullanici_adi"];
        $sifre = $_POST["sifre"];

        if(!$kullanici_adi || !$sifre){
            $hata = "Wrong username or password!";
        }
        elseif($kullanici_adi != $uye["kullanici_adi"]) {
            $hata = "Wrong Username!";
        }
        elseif($sifre != $uye["sifre"]){
            $hata = "Wrong password!";
        }else{
            $_SESSION["kullanici_adi"] = $uye["kullanici_adi"];
            header("Location: /Uygulama-GirisYap");
        }
    }

?>

<?php if(isset($hata)): ?>
    <div style="border: 1px solid red">   
        <?php echo $hata; ?>
    </div>
<?php endif; ?>


<form action="" method="post">

    Kullanıcı Adı: <br>
    <input type="text" name="kullanici_adi">
    <hr>
    Şifre: <br>
    <input type="password" name="sifre">
    <hr>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Giriş Yap</button>

</form>