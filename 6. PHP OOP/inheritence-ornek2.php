<?php

    class a
    {
        public function test()
        {
            return "a:test";
        }
    }

    class b extends a   
    {
        public function test()
        {
            return "b:test";
        }
    }

    class c extends b
    {
        public function test()
        {
            return "c:test";
        }

        public function testleriGetir()
        {
            return [
                "c" => $this -> test(), //Bulunduğu classtan değer alır.
                "b" => parent::test(), //Türetildiği classtan değeri alır.
                "a" => a::test() //Türetilen classı türeten herhangi bir classtan alabilirsin.
            ];
        }
    }

    $c = new c;
    print_r($c -> testleriGetir());
?>