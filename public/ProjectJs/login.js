$(document).ready(function(){

$("#con_logi").click(function(){
  var userName = $("#con_usnm").val();
  var password = $("#con_pas").val();

  if(userName == ""){
alert('Digite el nombre de usuario');
  return false;
  }
  if(password == ""){
     alert('Digite la contraseña');
   return false;
  }

  $.ajax({
        type:"GET",
        data:{'userName':userName,
              'password':password},
        url:"redirectPath",
        success: function(data){
          if(data == 0){
            alert("No Existe Usuario!");
            return false;
          }
          if(data == 1){
            window.location.href = "/Admin-RC/public/Admin";

          }
          if(data == 2){
            window.location.href = "/Admin-RC/public/Internal";
          }

          return false;
        }
  });

});

});
