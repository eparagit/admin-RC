$(document).ready(function(){

    $.ajax({
      type:"GET",
      data: {},
      url:"selectTripType",
      success:function(data){

        var slec="";
        $.each(data,function(v){
          var val=data[v];
          slec+="<option value='"+val['ID_Tipo_Viaje']+"'>"+val['Descripcion']+"</option>";
        });
         $("#tviaje").append(slec);
      }
    });


    $.ajax({
      type:"GET",
      data: {},
      url:"selectTripCat",
      success:function(data){
        var slec="";
        $.each(data,function(v){
          var val=data[v];
          slec+="<option value='"+val['ID_Categoria']+"'>"+val['Descripcion']+"</option>";
        });
         $("#cviaje").append(slec);
      }
    });


    $("#con_regv").click(function(){

     var t_id = "";//this.id;
      var usuario_id = $("#con_iduse").val();

      alert(usuario_id);
     //var tipo_viaje_id = $("#tviaje").val();
     //var cat_viaje_id = $("#cviaje").val();
    var est_viaje_id = 1;
     //var titulo = $("#con_titulo").val();
    // var descripcion = $("#con_descripcion").val();
    // var requisitos = $("#con_requisitos").val();
    // var cupo = $("#con_cupo").val();
     //var cost = $("#con_costo").val();
     var fecha_hora_salida =$("#con_dtfhs").val();
     var fecha_hora_regreso = $("#con_dtfhr").val();
     var publicacion =$("#con_dtfhr").val();
     var vencimiento = $("#con_dtfhv").val();
     moment(fecha_hora_salida,'YYYY-MM-DD hh:mm:ss');

     //f_h_s.format("y/m/d H:i:s");
    // var incluye = $("#con_incluye").val();
     //var imagen = $("#image").val();

    /* if(tipo_viaje_id == ""){
       alert('Seleccione el tipo de viaje');
      return false;
     }
     if(cat_viaje_id == ""){
       alert('Seleccione la categoría del viaje');
      return false;
     }
     if(titulo == ""){
       alert('Digite el título');
      return false;
     }
     if(descripcion == ""){
       alert('Digite la descripción');
      return false;
     }
     if(cupo == ""){
       alert('Seleccione el cupo');
      return false;
     }
     if(cost == ""){
       alert('Digite el costo');
      return false;
    }*/
     if(fecha_hora_salida == ""){
       alert('Seleccione la fecha y hora de salida');
      return false;
     }
     if(fecha_hora_regreso == ""){
       alert('Seleccione la fecha y hora de regreso');
      return false;
     }
     if(vencimiento == ""){
       alert('Seleccione la fecha y hora de vencimiento');
      return false;
     }
    /* if(incluye == ""){
       alert('Debe completar el campo incluye');
      return false;
     }
     if(imagen == ""){
       alert('Debe agregar una foto del viaje');
      return false;
    }*/
     $.ajax({
       type:'GET',
       data:{'usuario_id':usuario_id,
              /* 'tipo_viaje_id':tipo_viaje_id,
               'cat_viaje_id':cat_viaje_id,*/
               'est_viaje_id':est_viaje_id,
               /*'titulo':titulo,
               'descripcion':descripcion,
               'requisitos':requisitos,
               'cupo':cupo,
               'cost':cost,*/
               'fecha_hora_salida':fecha_hora_salida,
               'fecha_hora_regreso':fecha_hora_regreso,
               'publicacion':publicacion,
               'vencimiento': vencimiento
              /* 'incluye':incluye,
                'imagen':imagen*/},
                url:'insertTrip',
                success:function(data){
                      if(data==1){
                        alert("Viaje Insertado exitosamente!");
                      }else{
                        alert("No se logró insertar el viaje!");
                      }
                  }
       });

    });

  
});
