$(function(){

    //AJAX kullanarak php sayfama POST ile değer gönderiyorum.
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {"adsoyad" : "Veysel Kartalmış"},
        success: function(response){
            if(response.adsoyad){
                alert(response.adsoyad);
            }
        },
        dataType: "json"
    });

});