$(document).ready(function(){


    $.ajax({

            type:"GET",
            data: {},
            url:"selectTuorToApr",
            success:function(data)
            {
                var table_t="";
                var img="";
                var dats="";
                var des="";
                var inc="";
                var acci="";
                $.each(data,function(v){
                  var val=data[v];

                    //table_t+="<table>";
                    //table_t+="<thead>";
                  //  table_t+="</thead>";
                  //  table_t+="<tbody>";
                  table_t+="<tr>";
                  // table_t+="<td rowspan='7'>"+'<img src="{{url('+val['Ruta_Imagen']+')}}"/>'+"</td>";
                  table_t+="<td rowspan='7' colspan='4'>"+'<img  src="'+val["Ruta_Imagen"]+'" alt="" width="350" height="350"/>'+"</td>";
                  table_t+="<td>Reg."+'<input type="text" id="con_id_v" value="'+val['ID_Viaje']+'">'+"</td>";
                  table_t+="<td>"+val['NombreUsuario']+"</td>";
                  table_t+="<td></td>";
                  table_t+="<td></td>";
                  table_t+="<td></td>";
                    //table_t+="<td rowspan='7'>"+'<img src="'+val['Ruta_Imagen']+'/'+val['Imagen_Name']+'"/>'+"</td>";

                    // <img src="/img/path/to/image.jpg" />
                   //table_t+="<td rowspan='7'>"+val['Ruta_Imagen']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Publicación:'+"</td>";
                    table_t+="<td >"+val['Publicacion']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Vencimiento:'+"</td>";
                    table_t+="<td >"+val['Vencimiento']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Tipo Viaje:'+"</td>";
                    table_t+="<td>"+val['TV_Descripcion']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Categoría:'+"</td>";
                    table_t+="<td>"+val['CV_Descripcion']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Costo:'+"</td>";
                    table_t+="<td>"+val['Costo']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Cupo:'+"</td>";
                    table_t+="<td>"+val['Cupo']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Titulo:'+"</td>";
                    table_t+="<td colspan='5'>"+val['Titulo']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Lugar de Salida:'+"</td>";
                    table_t+="<td colspan='5'>"+val['Lugar_Salida']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Destino:'+"</td>";
                    table_t+="<td colspan='5'>"+val['Destino']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Fecha y Hora de Salida:'+"</td>";
                    table_t+="<td >"+val['FechaHora_Salida']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td>"+'Fecha y Hora de Regreso:'+"</td>";
                    table_t+="<td>"+val['FechaHora_Regreso']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td rowspan='3'>"+'Descripción:'+"</td>";
                    table_t+="<td rowspan='3' colspan='5'>"+val['V_Descripcion']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td rowspan='4'>"+'Incluye:'+"</td>";
                    table_t+="<td rowspan='4' colspan='5'>"+val['Incluye']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td rowspan='4'>"+'Requisitos:'+"</td>";
                    table_t+="<td rowspan='4' colspan='5'>"+val['Requisitos']+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td colspan='6' align='center'>"+'<button id="btn_apr" class="btn btn-success" data-id="'+val['ID_Viaje']+'" type="button">Aprobar</button>'+' '+'<button id="btn_mod" class="btn btn-primary" data-id="'+val['ID_Viaje']+'" type="button">Modificar</button>'+' '+'<button id="btn_rech" class="btn btn-danger" data-id="'+val['ID_Viaje']+'" type="button">Rechazar</button>'+"</td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="<td></td>";
                    table_t+="</tr>";
                    //table_t+="</tbody>";
                    //table_t+="<table>";



                });
                 $("#tb_tuors").append(table_t);

              }

         });
         $("#t_tours").on('click','#btn_apr',function(){
           var id = $(this).data('id');
           var id_e=2;

           $.ajax({
                   type:"GET",
                   data: {'id':id,
                          'idE':id_e},
                   url:"ApproveTour",
                   success:function(data){
                     if(data==1){
                       alert("Viaje aprobado satisfactoriamente!");
                      return redirect("/Admin-RC/public//GoTourAprlid");
                     }else{
                       alert("No se logró aprobar el viaje!");
                     }
                   }
           });
         });
         $("#t_tours").on('click','#btn_mod',function(){
           var id = $(this).data('id');
               $.ajax({
                type:"GET",
                data: {'id':id},
                url:"selectTuorToUpdateApp",
                success:function(data){
                  if(data==1){
                      window.location.replace("GoUpdateTwAp");
                  }

                }
            });

         });
         $("#t_tours").on('click','#btn_rech',function(){
           var id = $(this).data('id');
             $.ajax({
              type:"GET",
              data: {'id':id},
              url:"deleteTour",
              success:function(data){
                if(data==1){
                  alert("Viaje eliminado satisfactoriamente!");

                }else{
                  alert("No se logró eliminar el viaje!");
                }
              }
            });

        });
});
