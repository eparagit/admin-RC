$(document).ready(function(){

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
              tevt+="<td>"+'<button id="con_updateET" class="btn btn-primary" data-id="'+val['ID_Tipo_Evento']+'" type="button">Modificar</button>'+"</td>";
              tevt+="<tr>";
            });
              $("#t_eB").append(tevt);
          }
  });


  //Event Type
  $("#con_addevt").click(function(){
    var desc=$("#con_evt").val();
    //var userid=$("#con_iduse").val();
    if(desc== ""){
      alert('Digite el nuevo tipo de evento');
    return false;
    }
    var chang="Agregar nuevo tipo de evento";
        $.ajax({
              type:"GET",
              data: {'n_ety':desc},
              url:"insertNewEventType",
              success:function(data){
                if(data==1){
                  alert("El nuevo tipo de evento se agregó satisfactoriamente!");
                  $.ajax({
                          type:"GET",
                          data: {'chg':chang},
                          url:"SystemLogRegistry",
                           success:function(data){
                           if(data==1){

                            }
                            }
                          });
                  window.location.replace("GetEventType");
                }else{
                  alert("No se logró agregar el nuevo tipo de evento!");
                  window.location.replace("GetEventType");
                }
              }
        });
  });


  $("#t_eT").on('click','#con_updateET',function(){
    var id = $(this).data('id');
    $.ajax({
        type:"GET",
        data: {'id':id},
        url:"selectEventTypeByID",
        success:function(data){

          var id_bcs="";
          var desc_bcs="";
          $.each(data,function(v){
              var val=data[v];
              id_bcs=val['ID_Tipo_Evento'];
              desc_bcs=val['Descripcion'];


          })
          $("#con_desevnt").val(desc_bcs);
          $("#btnUpEvnt").data('id',id_bcs);

          $('#evtModal').modal('show');
          $('#evtModal').modal('toggle');


        }

    });
  });
  $("#evtModal").on('click','#btnUpEvnt',function(){
    var id=$(this).data('id');
    var desc=$("#con_desevnt").val();
    //var userid=$("#con_iduse").val();
    var chang="Actualizar tipo de evento";
            $.ajax({
                type:"GET",
                data: {'id':id,
                        'des':desc},
                url:"updateEventType",
                success:function(data){
                  if(data==1){
                    alert("Tipo de Eevento actualizado satisfactoriamente!");
                    $.ajax({
                            type:"GET",
                            data: {'chg':chang},
                            url:"SystemLogRegistry",
                             success:function(data){
                             if(data==1){

                              }
                              }
                      });
                    window.location.replace("GetEventType");
                  }else{
                    alert("No se logró actualizar el Tipo de Evento!");
                    window.location.replace("GetEventType");
                  }
                }
  });
  });
});
