<?php

    if(!isset($_GET["id"]) || empty($_GET["id"])){
        header("Location:index.php");
        exit;
    }

    // Silme işlemi yazmak için komutumu yazdım.
    $sorgu = $db -> prepare("DELETE FROM dersler WHERE
    id=?");

    $sorgu -> execute([
        $_GET["id"]
    ]);
    header("Location:index.php");

?>