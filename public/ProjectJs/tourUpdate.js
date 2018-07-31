$(document).ready(function(){

/*  $("#ff_tldd").click(function(){
      if($(this).is(':checked'))
  });*/


  $("#ff_cimage").click(function(){
      if($(this).is(':checked')){
        $("#image_control").show();
      }else{
        $("#image_control").hide();
      }
  });



$("#ff_tldd").click(function(){
    if($(this).is(':checked')){
      $("#con_titulo").prop('disabled',false);
      $("#con_lsalida").prop('disabled',false);
      $("#con_destino").prop('disabled',false);
      $("#con_descripcion").prop('disabled',false);
    }else{
      $("#con_titulo").prop('disabled',true);
      $("#con_lsalida").prop('disabled',true);
      $("#con_destino").prop('disabled',true);
      $("#con_descripcion").prop('disabled',true);
    }
});
$("#ff_tv").click(function(){

  if($(this).is(':checked')){
    $("#selectTV").show();
    $("#con_tvTemp").hide();
  }else{
    $("#selectTV").hide();
    $("#con_tvTemp").show();
  }
  });
$("#ff_cv").click(function(){

  if($(this).is(':checked')){
    $("#selectCV").show();
    $("#con_cvTemp").hide();

  }else{
    $("#selectCV").hide();
    $("#con_cvTemp").show();
  }
});
$("#fs_change").click(function(){
    if($(this).is(':checked')){
      $("#con_requisitos").prop('disabled',false);
      $("#con_incluye").prop('disabled',false);
      $("#con_cupo").prop('disabled',false);
      $("#con_costo").prop('disabled',false);
    }else{
      $("#con_requisitos").prop('disabled',true);
      $("#con_incluye").prop('disabled',true);
      $("#con_cupo").prop('disabled',true);
      $("#con_costo").prop('disabled',true);
    }
});



});
