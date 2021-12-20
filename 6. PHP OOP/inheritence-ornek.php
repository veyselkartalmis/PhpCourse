<?php

    class Calisanlar
    {
        public $maas;
        public $adsoyad;

        public function adSoyad($adsoyad)
        {
            return $this ->adSoyad = $adsoyad;
        }

        public function Maas($maas)
        {
            return $this ->Maas = $maas;
        }

        public function SenelikMaas()
        {
            return $this ->Maas * 12;
        }
    }

    class Muhasebe extends Calisanlar //Burada extends ile Calisanlar'i Muhasebe'ye dahil ediyorum
    {
        public function SenelikMaas()
        {
            return "MUHASEBE ÇALIŞANIMIZ " . $this->adsoyad . " SENELİK " . parent::SenelikMaas() . " TL ALMAKTADIR" . "<br>";
        }
    }

    class IT extends Calisanlar
    {
        public function SenelikMaas()
        {
            return "IT ÇALIŞANIMIZ " . $this->adsoyad . " SENELİK " . parent::SenelikMaas() . " TL ALMAKTADIR" . "<br>";
        }
    }

    $it = new IT;
    $it ->adsoyad = "[VEYSEL KARTALMIŞ]";
    $it -> Maas(4800);
    echo $it -> SenelikMaas();

    $muhasebe = new Muhasebe;
    $muhasebe ->adsoyad = "[MELTEM KASMAK]";
    $muhasebe -> Maas(4500);
    echo $muhasebe -> SenelikMaas();

?>