<?php

    interface CRUD
    {
        //Bir arayüz oluşturdum ve içinde nelerin olacağını belirledim.
        public function create($tableName,$id);
        public function read($tableName,$id);
        public function update($tableName,$data,$id);
        public function delete($tableName,$id);
    }

    interface DB extends CRUD  
    {
        //CRUD arayüzünden türeterek DB arayüzünü oluşturdum.
        public function connect($host, $dbName, $user, $pass);
    }

    class Database implements DB //CRUD yapabilirdim.
    {
        //Classı DB'den türettim. Onun yerine 
        public function connect($host, $dbName, $user, $pass){}
        public function create($tableName,$id){}
        public function read($tableName,$id){}
        public function update($tableName,$data,$id){}
        public function delete($tableName,$id){}
    }

?>
