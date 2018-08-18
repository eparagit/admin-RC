$(document).ready(function(){

  $("#con_ipassch").click(function(){
      window.location.replace("GetInternalPassChange");
  });
  $("#con_chan").click(function(){
    var oldPass=$("#con_pcontra").val();
    var newPass=$("#con_scontra").val();
    $.ajax({
      type: 'GET',
          data: { 'oldPass':oldPass,
                  'newPass':newPass },
          url: 'restorePassword',
          success: function(data){
            if(data === "CONTRASEÑA_ANTERIOR_INVALIDA"){
                alert("La contraseña anterior es invalida!");
                }else{
                    alert("La contraseña se cambio exitosamente!");
                }

          }
    });
  });

});
