$(document).ready(function(){
  $.ajax({
          type:"GET",
          data: {},
          url:"selectTourStatus",
          success:function(data){
            var tsatus="";
            $.each(data,function(v){
              var val=data[v];
              tsatus+="<tr>";
              tsatus+="<td>"+'<label id="con_iduser">'+val['ID_Estado_Viaje']+'</label>'+"</td>";
              tsatus+="<td>"+val['Descripcion']+"</td>";
              tsatus+="<td>"+'<button id="con_updateTS" class="btn btn-primary" data-id="'+val['ID_Estado_Viaje']+'" type="button">Modificar</button>'+' '+'<button id="con_delTS" class="btn btn-danger" data-id="'+val['ID_Estado_Viaje']+'" type="button">Eliminar</button>'+"</td>";

              tsatus+="<tr>";
            });
              $("#t_statusB").append(tsatus);
          }
  });
  $.ajax({
          type:"GET",
          data: {},
          url:"selectServiceType",
          success:function(data){
            var tserv="";
            $.each(data,function(v){
              var val=data[v];
              tserv+="<tr>";
              tserv+="<td>"+'<label id="con_iduser">'+val['ID_Tipo_Servicio']+'</label>'+"</td>";
              tserv+="<td>"+val['Descripcion']+"</td>";
              tserv+="<td>"+'<button id="con_updateST" class="btn btn-primary" data-id="'+val['ID_Tipo_Servicio']+'" type="button">Modificar</button>'+' '+'<button id="con_delST" class="btn btn-danger" data-id="'+val['ID_Tipo_Servicio']+'" type="button">Eliminar</button>'+"</td>";
              tserv+="<tr>";
            });
              $("#t_sB").append(tserv);
          }
  });
  $.ajax({
          type:"GET",
          data: {},
          url:"selectEventType",
          success:function(data){
            var tevt="";
            $.each(data,function(v){
              var val=data[v];
              tevt+="<tr>";
              tevt+="<td>"+'<label id="con_iduser">'+val['ID_Tipo_Evento']+'</label>'+"</td>";
              tevt+="<td>"+val['Descripcion']+"</td>";
              tevt+="<td>"+'<button id="con_updateET" class="btn btn-primary" data-id="'+val['ID_Tipo_Evento']+'" type="button">Modificar</button>'+' '+'<button id="con_delET" class="btn btn-danger" data-id="'+val['ID_Tipo_Evento']+'" type="button">Eliminar</button>'+"</td>";
              tevt+="<tr>";
            });
              $("#t_eB").append(tevt);
          }
  });
  $.ajax({
          type:"GET",
          data: {},
          url:"selectBCStatus",
          success:function(data){
            var bcsatus="";
            $.each(data,function(v){
              var val=data[v];
              bcsatus+="<tr>";
              bcsatus+="<td>"+'<label id="con_iduser">'+val['ID_EstadoRC']+'</label>'+"</td>";
              bcsatus+="<td>"+val['Descripcion']+"</td>";
              bcsatus+="<td>"+'<button id="con_updateBCS"  class="btn btn-primary" data-id="'+val['ID_EstadoRC']+'" type="button">Modificar</button>'+' '+'<button id="con_delBCS" class="btn btn-danger" data-id="'+val['ID_EstadoRC']+'" type="button">Eliminar</button>'+"</td>";
              bcsatus+="<tr>";
              //data-toggle="modal" data-target="#bcsModal"
            });
              $("#t_statusBCB").append(bcsatus);
          }
  });
  $.ajax({
          type:"GET",
          data: {},
          url:"selectTripCat",
          success:function(data){
            var cat="";
            $.each(data,function(v){
              var val=data[v];
              cat+="<tr>";
              cat+="<td>"+'<label id="con_iduser">'+val['ID_Categoria']+'</label>'+"</td>";
              cat+="<td>"+val['Descripcion']+"</td>";
              cat+="<td>"+'<button id="con_updTC" class="btn btn-primary" data-id="'+val['ID_Categoria']+'" type="button">Modificar</button>'+' '+'<button id="con_delTC" class="btn btn-danger" data-id="'+val['ID_Categoria']+'" type="button">Eliminar</button>'+"</td>";
              cat+="</tr>";

            });
              $("#t_caB").append(cat);
          }
  });
  //Category Type
  $("#con_addncat").click(function(){
    var desc=$("#con_ncat").val();
        $.ajax({
              type:"GET",
              data: {'n_cat':desc},
              url:"insertNewCategory",
              success:function(data){
                if(data==1){
                  alert("La nueva categoría se agregó satisfactoriamente!");
                  window.location.replace("GoTourCategory");
                }else{
                  alert("No se logró agregar la nueva categoría!");
                  window.location.replace("GoTourCategory");
                }
              }
        });
  });
  $("#t_caT").on('click','#con_delTC',function(){
    var id_tc=$(this).data('id');
      $.ajax({
        type:"GET",
        data: {'id':id_tc},
        url:"deleteTourCategory",
        success:function(data){
          if(data==1){
            alert("Categoría eliminada satisfactoriamente!");
            window.location.replace("GoTourCategory");
          }else{
            alert("No se logró eliminar la categoría!");
            window.location.replace("GoTourCategory");
          }
        }
      });
  });
  //Tour t_status
  $("#con_addts").click(function(){
    var desc=$("#con_est_desc").val();
        $.ajax({
              type:"GET",
              data: {'n_ts':desc},
              url:"insertNewTourStatus",
              success:function(data){
                if(data==1){
                  alert("El nuevo estado de viaje se agregó satisfactoriamente!");
                  window.location.replace("GoTourStatus");
                }else{
                  alert("No se logró agregar el nuevo estado de viaje!");
                  window.location.replace("GoTourStatus");
                }
              }
        });
  });
  $("#t_statusT").on('click','#con_delTS',function(){
    var id_ts=$(this).data('id');
      $.ajax({
        type:"GET",
        data: {'id':id_ts},
        url:"deleteTourStatus",
        success:function(data){
          if(data==1){
            alert("Estado de viaje eliminado satisfactoriamente!");
            window.location.replace("GoTourStatus");
          }else{
            alert("No se logró eliminar el estado de viaje!");
            window.location.replace("GoTourStatus");
          }
        }
      });
  });
  //ServiceType
  $("#con_addst").click(function(){
    var desc=$("#con_sevT").val();
        $.ajax({
              type:"GET",
              data: {'n_sty':desc},
              url:"insertNewServiceType",
              success:function(data){
                if(data==1){
                  alert("El nuevo tipo de servicio se agregó satisfactoriamente!");
                  window.location.replace("GoServiceType");
                }else{
                  alert("No se logró agregar el nuevo tipo de servicio!");
                  window.location.replace("GoServiceType");
                }
              }
        });
  });
  $("#t_sT").on('click','#con_delST',function(){
    var id_st=$(this).data('id');
      $.ajax({
        type:"GET",
        data: {'id':id_st},
        url:"deleteServiceType",
        success:function(data){
          if(data==1){
            alert("El tipo de servicio se eliminó satisfactoriamente!");
            window.location.replace("GoServiceType");
          }else{
            alert("No se logró eliminar el tipo de servicio!");
            window.location.replace("GoServiceType");
          }
        }
      });
  });
  //Event Type
  $("#con_addevt").click(function(){
    var desc=$("#con_evt").val();
        $.ajax({
              type:"GET",
              data: {'n_ety':desc},
              url:"insertNewEventType",
              success:function(data){
                if(data==1){
                  alert("El nuevo tipo de evento se agregó satisfactoriamente!");
                  window.location.replace("GoEventType");
                }else{
                  alert("No se logró agregar el nuevo tipo de evento!");
                  window.location.replace("GoEventType");
                }
              }
        });
  });
  $("#t_eT").on('click','#con_delET',function(){
    var id_et=$(this).data('id');
      $.ajax({
        type:"GET",
        data: {'id':id_et},
        url:"deleteEventType",
        success:function(data){
          if(data==1){
            alert("El tipo de evento se eliminó satisfactoriamente!");
            window.location.replace("GoEventType");
          }else{
            alert("No se logró eliminar el tipo de evento!");
            window.location.replace("GoEventType");
          }
        }
      });
  });
  //BC Status
  $("#con_addbcst").click(function(){
    var desc=$("#con_bcst").val();
        $.ajax({
              type:"GET",
              data: {'n_bcs':desc},
              url:"insertNewBCSatus",
              success:function(data){
                if(data==1){
                  alert("El nuevo estado RC se agregó satisfactoriamente!");
                  window.location.replace("GoBCStatus");
                }else{
                  alert("No se logró agregar el nuevo estado RC!");
                  window.location.replace("GoBCStatus");
                }
              }
        });
  });
  $("#t_statusBCT").on('click','#con_delBCS',function(){
    var id_bcs=$(this).data('id');
      $.ajax({
        type:"GET",
        data: {'id':id_bcs},
        url:"deleteBCStatus",
        success:function(data){
          if(data==1){
            alert("El estado RC se eliminó satisfactoriamente!");
            window.location.replace("GoBCStatus");
          }else{
            alert("No se logró eliminar el estado RC!");
            window.location.replace("GoBCStatus");
          }
        }
      });
  });
  $("#t_statusBCB").on('click','#con_updateBCS',function(){
    var id = $(this).data('id');

    $.ajax({
        type:"GET",
        data: {'id':id},
        url:"selectBCStatusByID",
        success:function(data){

          var id_bcs="";
          var desc_bcs="";
          $.each(data,function(v){
              var val=data[v];
              id_bcs=val['ID_EstadoRC'];
              desc_bcs=val['Descripcion'];


          })
          $("#con_desBcs").val(desc_bcs);
          $("#btnUpBCS").data('id',id_bcs);

          $('#bcsModal').modal('show');
          $('#bcsModal').modal('toggle');


        }

    });
  });
  $("#bcsModal").on('click','#btnUpBCS',function(){
    var id=$(this).data('id');
    alert(id);
  });
});
