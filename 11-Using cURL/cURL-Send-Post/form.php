<?php

    if(isset($_POST["submit"])){
        print_r($_POST);
        exit;
    }

?>


<form action="" method="post">

    Ad: <input type="text" name="ad"> <br><br>
    Soyad: <input type="text" name="soyad"> <br><br>
    Meslek: <select name="meslek">
        <option value="Muhasebeci">Muhasebeci</option>
        <option value="Developer">Developer</option>
    </select> <br><br>
    <button type="submit" name="submit" value="1">Gönder</button>

</form>