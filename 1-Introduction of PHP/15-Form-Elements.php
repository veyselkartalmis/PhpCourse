<form action="gonder.php" method=post enctype="multipart/form-data">
    
    Ad: 
    <input type="textbox" required name="ad" placeholder="Adınızı giriniz:"> <br>
    <hr>
    Hakkımda: <br>
    <textarea name="hakkimda" required cols="30" rows="10" placeholder="Bir şeyler yaz.."></textarea>
    <hr>
    Meslek: <br>
    <select name="meslek[]">
        <option value="">--SEÇİM YAP--</option>
        <option value="web">Web Tasarımcı</option>
        <option value="android">Android Geliştirici</option>
        <option value="ios">Ios Geliştirici</option>
    </select>
    <hr>
    Cinsiyet: <br>
    <label>
        <input type="radio" name="cinsiyet" value="erkek">
        Erkek
    </label>
    <label>
        <input type="radio" name="cinsiyet" value="kadın">
        Kadın
    </label>
    <hr>
    İlgi Alanları: <br>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="css"> CSS
    </label>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="html"> HTML
    </label>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="php"> PHP
    </label>
    <hr>
    Fotoğraf: <br>
    <input type="file" name="fotograf">
    <hr>
    <button type="submit">GÖNDER</button>
    
    

</form>