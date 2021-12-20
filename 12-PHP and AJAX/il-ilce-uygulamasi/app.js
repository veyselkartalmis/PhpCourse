$(function(){

    $(document.body).on('change', '#il', function(){
        var plakaKodu = $(this).val();
        if (plakaKodu){
            $.post('ajax.php', {'plakaKodu': plakaKodu}, function(response){
                $('#ilce').html(response).removeAttr('disabled');
            });
        } else {
            $('#ilce').html('<option>- İlçe Seçin -</option>').attr('disabled', 'disabled');
        }
    });

});