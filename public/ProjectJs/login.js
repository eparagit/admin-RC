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

          if(data == 1){
            window.location.href = "/Admin-RC/public/Admin";

          }
          if(data == 2){
            window.location.href = "/Admin-RC/public/Internal";
          }
           if(data == 7){
              alert("No Existe Usuario!");
            
          }
          if(data==9){
            window.location.replace("GetFirstPasswordChange");
          }

        }
  });

});
$("#con_pchange").click(function(){
      var username=$("#con_usname").val();
      var oldpass=$("#con_cpas").val();
      var newpass=$("#con_pas").val();

        $.ajax({
                type:"GET",
                data:{'usname':username,
                      'old_pass':oldpass,
                      'new_pass':newpass},
                url:"passwordChange",
                success: function(data){
                  switch(data){
                    case '1': alert("Nombre se usuario incorrecto!");
                            Break;
                    case '2': alert("Contraseña incorrecta!");
                            Break;
                    case '3': alert("La contraseña se cambió exitosamente!");
                              window.location.replace("Login");
                            Break;
                    default: break;
                  }

                }
        });

    });
});
