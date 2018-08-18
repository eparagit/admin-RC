$(document).ready(function(){
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
              tserv+="<td>"+'<button id="con_updateST" class="btn btn-primary" data-id="'+val['ID_Tipo_Servicio']+'" type="button">Modificar</button>'+"</td>";
              tserv+="<tr>";
            });
              $("#t_sB").append(tserv);
          }
  });
  //ServiceType
  $("#con_addst").click(function(){
    var desc=$("#con_sevT").val();
    //var userid=$("#con_iduse").val();
    if(desc== ""){
      alert('Digite el nuevo tipo de servicio');
    return false;
    }
    var chang="Agregar nuevo tipo de servicio";
        $.ajax({
              type:"GET",
              data: {'n_sty':desc},
              url:"insertNewServiceType",
              success:function(data){
                if(data==1){
                  alert("El nuevo tipo de servicio se agregó satisfactoriamente!");
                  $.ajax({
                          type:"GET",
                          data: {'chg':chang},
                          url:"SystemLogRegistry",
                           success:function(data){
                           if(data==1){

                            }
                            }
                    });
                  window.location.replace("GetServiceType");
                }else{
                  alert("No se logró agregar el nuevo tipo de servicio!");
                  window.location.replace("GetServiceType");
                }
              }
        });
  });

  $("#t_sT").on('click','#con_updateST',function(){
    var id = $(this).data('id');

    $.ajax({
        type:"GET",
        data: {'id':id},
        url:"selectServiceTypeByID",
        success:function(data){

          var id_bcs="";
          var desc_bcs="";
          $.each(data,function(v){
              var val=data[v];
              id_bcs=val['ID_Tipo_Servicio'];
              desc_bcs=val['Descripcion'];


          })
          $("#con_dservty").val(desc_bcs);
          $("#btnservty").data('id',id_bcs);

          $('#servtModal').modal('show');
          $('#servtModal').modal('toggle');


        }

    });
  });
  $("#servtModal").on('click','#btnservty',function(){
    var id=$(this).data('id');
    var desc=$("#con_dservty").val();
    //var userid=$("#con_iduse").val();
    var chang="Actualizar tipo de servicio";
            $.ajax({
                type:"GET",
                data: {'id':id,
                        'des':desc},
                url:"updateServiceType",
                success:function(data){
                  if(data==1){
                    alert("Tipo de Servicio actualizado satisfactoriamente!");
                    $.ajax({
                          type:"GET",
                          data: {'chg':chang},
                          url:"SystemLogRegistry",
                           success:function(data){
                           if(data==1){

                            }
                            }
                    });
                    window.location.replace("GetServiceType");
                  }else{
                    alert("No se logró actualizar el Tipo de Servicio!");
                    window.location.replace("GetServiceType");
                  }
                }
  });
});

});
