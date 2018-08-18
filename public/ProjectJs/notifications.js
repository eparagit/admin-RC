$(document).ready(function(){

    $.ajax({
          type:"GET",
          data:{},
          url:"selectToursNotifications",
          success: function(data){
            $("#tour_Notificaciones").html(data);
            return false;
          }
    });

    $.ajax({
          type:"GET",
          data:{},
          url:"selectProductNotifications",
          success: function(data){
            $("#producto_Notificaciones").html(data);
            return false;
          }
    });

});
