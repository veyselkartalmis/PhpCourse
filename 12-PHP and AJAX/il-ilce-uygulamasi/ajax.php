<?php

require 'db.php';

if (isset($_POST['plakaKodu'])){

    $plakaKodu = $_POST['plakaKodu'];

    // ilçelerini bul
    $sorgu = $db->prepare('SELECT * FROM ilceler WHERE il_plaka = ?');
    $sorgu->execute([$plakaKodu]);
    $ilceler = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    $html = '<option>- İlçe Seçin -</option>';
    foreach ($ilceler as $ilce){
        $html .= '<option value="' . $ilce['ilce_id'] . '">' . $ilce['ilce_adi'] . '</option>';
    }

    echo $html;

}