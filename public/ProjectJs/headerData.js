$(document).ready(function(){
    $.ajax({
          type:"GET",
          data: {},
          url:"countRemainingBooking",

          success:function(data){
            $("#count_r").val(data);

          }



    });
});
