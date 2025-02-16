$(document).ready(function(e) {  
    $('#sel_city_chosen').hide();
    $('#sel_ter_chosen').hide(); 
    $.ajax({  //добавление областей
        url: 'get_oblast.php', 
        type: 'POST',  
        success: function(data) { 
            if (data) {
                $('#sel_oblast').append(data);
                $("#sel_oblast").trigger("chosen:updated");
            }
        }
    });
    $('#sel_oblast').change(function() {
          $("#sel_city").empty();
          $("#sel_ter_chosen").hide();
          $("#sel_city").trigger("chosen:updated");
          $("#sel_ter").empty();
          $("#sel_ter").trigger("chosen:updated");
         var oblast_id = $('#sel_oblast').val();
         $.ajax({
             url: 'get_region.php', 
             type: 'POST', 
             data: {
                 oblast_id: oblast_id
             }, 
             success: function(data) { 
                 if (data) {
                    $('#sel_city_chosen').show();
                     $('#sel_city').append(data);
                     $("#sel_city").trigger("chosen:updated");
                 }
             }
         });
     });
     $('#sel_city').change(function() {
        //  $("#sel_ter").empty();
        //  $("#sel_ter").trigger("chosen:updated");
         var city_id = $('#sel_city').val();
         $.ajax({
             url: 'get_territory.php',
             type: 'POST', 
             data: {
                 city_id: city_id
             }, 
             success: function(data) { 
                 if (data) {
                    $("#sel_ter_chosen").show();
                     $("#sel_ter").empty();
                     $('#sel_ter').append(data);
                     $("#sel_ter").trigger("chosen:updated");
                 }
             }
         });
     });
     $('select').change(function() {
         $(".text-error").remove();})
 });