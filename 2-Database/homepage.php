<?php require_once "header.php" ?>
<h3>Ders Listesi</h3> <br>

<!-- Arama formum (hem tarih aralığı için hem içeren değer için) -->
<form action="" method="get">
<input type="text" class="tarih" name="baslangic" placeholder="Başlangıç tarihi" value="<?php echo isset($_GET["baslangic"]) ? $_GET["baslangic"] : "" ?>">
    <input type="text" class="tarih" name="bitis" placeholder="Bitiş tarihi" value="<?php echo isset($_GET["bitis"]) ? $_GET["bitis"] : "" ?>"> <br> <br>
    <input type="text" name="arama" placeholder="Derslerde Ara" value="<?php echo isset($_GET["arama"]) ? $_GET["arama"] : "" ?>">
    <button type="submit">Ara</button>
</form>

<!-- DateTimePicker için referans linkerim -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(".tarih").datepicker({
        dateFormat: "yy-mm-dd"
    });
</script>

<?php
    // Eğer arama değeri varsa SQL sorgumun arasına bu koşulu ekledim.
    // Aynı zamanda INNER JOIN kullanarak iki tablomu ilişkilendirdim.
    $where = [];
    $sql = "SELECT dersler.id, dersler.baslik, kategoriler.ad AS kategori_adi, dersler.onay FROM dersler
    INNER JOIN kategoriler ON kategoriler.id = dersler.kategori_id";

    // GET edilen değer olup olmadığını veya boş olup olmadığını kontrol ediyorum.
    if(isset($_GET["arama"]) && !empty($_GET["arama"])){
        $where[] = '(dersler.baslik LIKE "%' . $_GET["arama"] . '%" || dersler.icerik LIKE "%' . $_GET["arama"] . '%")';
    }
    if(isset($_GET["baslangic"]) && !empty($_GET["baslangic"]) && isset($_GET["bitis"]) && !empty($_GET["bitis"])) {
        $where[] = 'dersler.tarih BETWEEN "' . $_GET["baslangic"] . ' 00:00:00 " AND "' . $_GET["bitis"] . ' 23:59:59 "';
    }
    // Eğer WHERE dizisine gönderilen değer varsa sql değişkenime ekletiyorum.
    if(count($where) > 0){
        // WHERE dizisindeki elemanları && karakterine bölerek sql değişkenime aktarıyorum.
        $sql .= " WHERE " . implode(" && ", $where); 
    }
    $sql .= " ORDER BY dersler.id DESC";

    // Yazdığım SQL sorgusunu işleme alıyorum.
    $dersler = $db -> query($sql) -> fetchAll(PDO::FETCH_ASSOC);

?>

<?php if($dersler): ?>

<ul>
    <!-- Bu kısımda foreach ile dersleri çekerek li'ye aktardım -->
    <?php foreach($dersler as $ders): ?>
    
        <li>
            <?php echo $ders["baslik"]; ?>
            <!-- INNER JOIN ile çektiğim kategoriyi burada yazdırdım -->
              (<?php echo $ders["kategori_adi"]; ?>)
            <div>
                <?php if($ders["onay"] == 1): ?>
                    <a href="index.php?sayfa=oku&id=<?php echo $ders["id"] ?>">[OKU]</a>
                <?php endif; ?>
                <a href="index.php?sayfa=guncelle&id=<?php echo $ders["id"]?>">[DÜZENLE]</a>
                <a href="index.php?sayfa=sil&id=<?php echo $ders["id"]?>">[SİL]</a>
            </div>
        </li>
    
    <?php endforeach; ?>

</ul>

<!-- Eğer hiç ders yoksa bu alanı göster diye belirtttim. -->
<?php else: ?>
    <div>
        <?php if(isset($_GET["arama"])): ?>
            <h3>Aradığınız kritere ait ders bulunamadı!</h3>
        <?php else: ?>
            <h3>Henüz eklenmiş ders bulunmuyor!</h3>
        <?php endif; ?>
    </div>
<?php endif;?>