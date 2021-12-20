<?php require_once "header.php"?>
<a href="index.php?sayfa=kategori_ekle">[KATEGORİ EKLE]</a>

<?php

    $kategoriler = $db -> query("SELECT kategoriler.*, COUNT(dersler.id) as toplamDers FROM kategoriler
    LEFT JOIN dersler ON FIND_IN_SET(kategoriler.id , dersler.kategori_id)
    GROUP BY kategoriler.id") -> fetchAll(PDO::FETCH_ASSOC);
    
?>

<ul>
    <?php foreach($kategoriler as $kategori): ?>
    <li>
        <a href="index.php?sayfa=kategori&id=<?php echo $kategori["id"] ?>">
            <?php echo $kategori["ad"] ?>
        </a>
        (<?php echo $kategori["toplamDers"] . " adet konu bulunmaktadır." ?>)
    </li>
    <?php endforeach; ?>
</ul>