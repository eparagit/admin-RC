$(document).ready(function(){

$("#con_logout").click(function(){
  $.ajax({
    type:"GET",
    data:{},
    url:"logoutS",
    success: function(data){
      if(data==1){
        window.location.href = "/Admin-RC/public/Login";
      }else{
        alert("No se logró cerrar la session!");
      }
    }
  });
});

        $.ajax({
          type:"GET",
          data:{},
          url:"CheckSession",
          success: function(data){
            var val="";
            if(data==0){
              val=0;
              if(val==0){
                window.location.replace("GetNotAllowedBlade");
              }

            }
          }
});
});
