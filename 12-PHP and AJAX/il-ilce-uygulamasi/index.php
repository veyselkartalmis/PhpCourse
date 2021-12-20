<?php
require 'db.php';
$iller = $db->query('SELECT * FROM iller ORDER BY plaka_no ASC')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="app.js"></script>
</head>
<body>

<ul>
    <li>
        <div>İl</div>
        <select name="il" id="il">
            <option value="">- İl Seçin -</option>
            <?php foreach($iller as $il): ?>
                <option value="<?=$il['plaka_no']?>"><?=$il['il_adi']?></option>
            <?php endforeach; ?>
        </select>
    </li>
    <li>
        <div>İlçe</div>
        <select name="ilce" id="ilce" disabled>
            <option value="">- İlçe Seçin -</option>
        </select>
    </li>
</ul>
    
</body>
</html>