jQuery(function ($) {
    $(document).ready(function(){
    $('#submitbtn').prop('disabled', true);
    $('#agree').change(function() {
        state = $(this).prop('checked');
        //alert(state);
        if(state) {
            $('#submitbtn').prop('disabled', false);
        }
        else {
            $('#submitbtn').prop('disabled', true);
        }
    });
  });
});

$(document).ready(function(){
 $( "#firstname" ).bind( "change", function() {
     var data = $('#contactform').serialize();
     console.log(data);
        $.ajax({
             type: "POST",
             url: "NLC.php",
             data: data,
        success: function(html) {
        //предварительно очищаем нужный элемент страницы
        $("#result").empty();
        //и выводим ответ php скрипта
        $("#result").append(html);
        }
    });
  });
});


