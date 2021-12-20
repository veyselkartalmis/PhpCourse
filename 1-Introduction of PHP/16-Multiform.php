<?php

    function form_filtrele($post)
    {
        return is_array($post) ? array_map("form_filtrele",$post) : htmlspecialchars(trim($post));
    }

    $_POST = array_map("form_filtrele",$_POST);

    function post($name)
    {
        if(isset($_POST[$name]))
            return $_POST[$name];
    }

    if(post("giris_yap"))
    {
        print_r($_POST);
    }
    if(post("kayit_ol"))
    {
        print_r($_POST);
    }

?>

<form action="" method="post">
    <hr>
    <h3>GİRİŞ YAP</h3>
    Kullanıcı Adı: <br>
    <input type="text" name="kadi"> <br><br>
    Şifre: <br>
    <input type="password" name="password"> <br><br>
    <button type="submit">GİRİŞ YAP</button> <br>
    <input type="hidden" name="giris_yap" value="1">
    <hr>
</form>

<form action="" method="post">
    <h3>KAYIT OL</h3>
    Kullanıcı Adı: <br>
    <input type="text" name="kadi"> <br><br>
    Şifre: <br>
    <input type="password" name="password"> <br><br>
    E-Posta: <br>
    <input type="email" name="posta"> <br><br>
    <button type="submit">KAYIT OL</button> <br>
    <input type="hidden" name="kayit_ol" value="1">
    <hr>
</form>