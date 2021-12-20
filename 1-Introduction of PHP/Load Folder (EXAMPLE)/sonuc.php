<?php

    if($_FILES["dosya"]["error"]==4){
        echo "Lütfen bir dosya seçiniz!";
        
    }else{
       if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){

            $gecerli_uzantilar = [
                "image/jpeg",
                "image/gif",
                "image/png"
            ];
            
            $gecerli_boyut = (1024 * 1024 *3); // en fazla 3mb dosya yüklenebilir
            $dosyaUzantisi = $_FILES['dosya']['type']; //dosyanın uzantısını çekiyorum.
            $dosyaBoyutu = $_FILES['dosya']['size']; //dosyanın boyutunu çekiyorum.
            $dosya_adi = $_FILES["dosya"]["name"];

            if(in_array($dosyaUzantisi,$gecerli_uzantilar)){ //dosyanın geçerli uzantıda olup olmadığını sorguluyorum
                
                if($gecerli_boyut >= $dosyaBoyutu){

                    $yukle = move_uploaded_file($_FILES["dosya"]["tmp_name"],"YuklenenDosyalar/". $_FILES["dosya"]["name"]);
                    if($yukle){
                        echo "<h3>Dosyanız başarılı bir şekilde yüklendi</h3>";
                        echo '<img src="YuklenenDosyalar/"'. $dosya_adi . '">';
                    }else{
                        echo "Bir sorun oluştu ve resminiz yüklenemedi";
                    }

                }else{
                    echo "Dosya boyutu en fazla 3MB olmalıdır";
                }

            }else{
                echo "Dosya sadece jpeg, png veya gif olmalıdır!";
            }

       }
       else{
           echo "Dosya yüklenirken bir hatayla karşılaştık";
       }
    }

?>

<a href="upload.php"> [ÇIKIŞ YAP] </a>