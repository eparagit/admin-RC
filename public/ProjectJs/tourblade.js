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

                  table_t+="<td rowspan='7'>"+'<img  src="'+val["Ruta_Imagen"]+'" alt="" width="350" height="350"/>'+"</td>";
                  alert(table_t);
                    //table_t+="<td rowspan='7'>"+'<img src="'+val['Ruta_Imagen']+'/'+val['Imagen_Name']+'"/>'+"</td>";

                    // <img src="/img/path/to/image.jpg" />
                   //table_t+="<td rowspan='7'>"+val['Ruta_Imagen']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'#'+"</td>";
                    table_t+="<td>"+val['ID_Viaje']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Titulo:'+"</td>";
                    table_t+="<td>"+val['Titulo']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Tipo Viaje:'+"</td>";
                    table_t+="<td>"+val['TV_Descripcion']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Categoría:'+"</td>";
                    table_t+="<td>"+val['CV_Descripcion']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Costo:'+"</td>";
                    table_t+="<td>"+val['Costo']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'Cupo:'+"</td>";
                    table_t+="<td>"+val['Cupo']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td colspan='3'>"+'Descripción:'+"</td>";
                    table_t+="<td rowspan='2' colspan='3'>"+val['V_Descripcion']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td colspan='3'>"+'Incluye:'+"</td>";
                    table_t+="<td rowspan='3' colspan='3'>"+val['Incluye']+"</td>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="</tr>";
                    table_t+="<tr>";
                    table_t+="<td>"+'<button id="btn_apr" class="btn btn-success" data-id="'+val['ID_Viaje']+'" type="button">Aprobar</button>'+' '+'<button id="btn_mod" class="btn btn-primary" data-id="'+val['ID_Viaje']+'" type="button">Modificar</button>'+' '+'<button id="btn_rech" class="btn btn-danger" data-id="'+val['ID_Viaje']+'" type="button">Rechazar</button>'+"</td>";
                    table_t+="</tr>";
                    //table_t+="</tbody>";
                    //table_t+="<table>";



                });
                 $("#tb_tuors").append(table_t);

              }

         });
});
