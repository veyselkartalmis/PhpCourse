<?php

    require_once "header.php";

    $kategoriler = $db -> query("SELECT * FROM kategoriler ORDER BY ad ASC") -> fetchAll(PDO::FETCH_ASSOC);

    if(isset($_POST["submit"])){
        $baslik = isset($_POST["baslik"]) ? $_POST["baslik"] : null;
        $icerik = isset($_POST["icerik"]) ? $_POST["icerik"] : null;
        $onay = isset($_POST["onay"]) ? $_POST["onay"] : 0;
        $kategori_id = isset($_POST["kategori_id"]) && is_array($_POST["kategori_id"]) ? implode("," , $_POST["kategori_id"]) : null;

        if(!$baslik){
            echo "Başlık giriniz!";
        } elseif(!$icerik){
            echo "İçerik giriniz!";
        } elseif(!$kategori_id){
            echo "Kategori seçiniz!";
        } else{
            //Kayıt sorgumu hazırladım
            $sorgu = $db -> prepare("INSERT INTO dersler SET
            baslik = ?,
            icerik = ?,
            kategori_id=?,
            onay = ?");

            //Sorgumu ekle adlı değere execute ettim
            $ekle = $sorgu -> execute([
                $baslik, $icerik, $kategori_id ,$onay
            ]);

            $sonID = $db -> lastInsertId();

            if($ekle){
                header("Location:index.php?sayfa=oku&id=".$sonID);
            }else{
                $hata = $sorgu -> errorInfo();
                echo "MySQL hatası : " . $hata[2];
            }
        }
    }

?>

<form action="" method="post">

    Başlık: <br>
    <input type="text" name="baslik"> <br> <br>

    İçerik: <br>
    <textarea name="icerik" cols="30" rows="10"></textarea> <br> <br>

    Kategori: <br>
    <select name="kategori_id[]" multiple size="5">
        <?php foreach($kategoriler as $kategori): ?>
            <option value="<?php echo $kategori["id"]?>"> <?php echo $kategori["ad"] ?> </option>
        <?php endforeach; ?>
    </select> <br><br>

    Onay: <br>
    <select name="onay" id="">
        <option value="1">Onaylı</option>
        <option value="0">Onaylı Değil</option>
    </select> <br><br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Gönder</button>

</form>