<?php

    class DB
    {
        private $db;

        //Kurucu metodum. Class çalışır çalışmaz işleyen kod bloğudur.
        public function __construct($host,$kadi,$sifre){
            return "VERİTABANI BAĞLANTISI BAŞLADI" . PHP_EOL;
            $this->db = new PDO("mysql:host=" . $host, $kadi, $sifre);
        }

        public function getData(){
            return "VERİTABANINDAN GELEN DATALAR" . PHP_EOL;
        }

        //Yıkıcı metodum. Classla işlemim sonlanınca çalışacak kod bloğudur.
        public function __destruct(){
            return "YIKICI METOD ÇALIŞTI" . PHP_EOL;
            $this->db = null;
        }
    }

    $db = new DB("localhost","root","");
    echo $db -> getData(); 

?>