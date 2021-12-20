<?php

    function listele($dizin_adi){
        echo '<ul>';
            $dosyalar = glob($dizin_adi);
            foreach($dosyalar as $dosya){
                echo '<li>' . $dosya;
                if(is_dir($dosya)){
                    listele($dosya . '/*');
                }
                echo "</li>";
            }
        echo '</ul>';
    }

    listele('*');
    
?>