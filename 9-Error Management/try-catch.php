<?php

  class Hata extends Exception{ //Hata sınıfna Exception sınıfını dahil ediyorum.
    public function printJSON() //JSON tipi için bir fonksiyon yazdım.
    {
      $data = [
        "satir" => $this->line, //Exception sınıfında olanlara atama yapıyorum.
        "dosya" => $this->file,
        "mesaj" => $this->message
      ];
      return json_encode($data); //Verileri JSON formatına dönüştürüyorum.
    }

    public function printXML() //XML formatı için bir fonksiyon yazdım.
    {
      header("Content-type: text/xml");
      $xml = new SimpleXMLElement("<hata/>");
      $xml->addChild("satir", $this->line);
      $xml->addChild("dosya", $this->file);
      $xml->addChild("mesaj", $this->message);
      return $xml->asXML();
    }
  }

    try{
      if(!isset($_GET["id"])){
        throw new Hata("ID PARAMETRESİ YOK!");
      } elseif(empty($_GET["id"])){
        throw new Hata("ID PARAMETRESİ BOŞ!");
      } elseif(!is_numeric($_GET["id"])){
        throw new Hata("ID PARAMETRESİ SAYI DEĞİL!");
      } elseif($_GET["id"] != 10){
        throw new Hata("ID 10'A EŞİT DEĞİL!");
      }
    } catch(Hata $e){
      if(isset($_GET["tip"])){
        if($_GET["tip"] == "xml"){
          echo $e->printXML();
        }else{
          echo $e->printJSON();
        }
      }
      else{
        echo $e->printJSON();
      }
    }

?>