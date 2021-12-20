<?php

    //print_r($_POST); post ettiğimiz değerleri yazdırır.

    function form_filtrele($post)
    {
        return is_array($post) ? array_map("form_filtrele",$post) : htmlspecialchars(trim($post));
    }

    $_POST = array_map("form_filtrele",$_POST); //YAZDIĞIM FONKSİYONU POSTLA GELEN DİZİDE UYGULAR

    function post($name)
    {
        if(isset($_POST[$name])) //VERİLEN PARAMATREYE AİT BİR DEĞER VAR MI KONTROL EDER
            return $_POST[$name];
    }

    echo post("hakkimda");

?>