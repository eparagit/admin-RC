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

});
