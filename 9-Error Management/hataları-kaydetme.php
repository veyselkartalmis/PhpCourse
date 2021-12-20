<?php

    function HatalariYakala($no, $msg, $file, $line){
        # Hataları dosyaya yazdıralım;
        $veri = $no . "|" . $msg . "|" . $file . "|" . $line . "\n";
        file_put_contents("hatalar.log", $veri, FILE_APPEND);
        
        # Hataları veritabanına aktaralım;
        $db = new PDO("mysql:host=localhost;dbname=hatalar","root","");
        $insert = $db->prepare("INSERT INTO log SET no=?, msg=?, file=?, line=?");
        $insert->execute([$no, $msg, $file, $line]);
    }

    set_error_handler("HatalariYakala");
    echo substr();

?>