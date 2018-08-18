$(document).ready(function(){
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
              cat+="<td>"+'<button id="con_updTC" class="btn btn-primary" data-id="'+val['ID_Categoria']+'" type="button">Modificar</button>'+"</td>";
              cat+="</tr>";

            });
              $("#t_caB").append(cat);
          }
  });
  //Category Type
  $("#con_addncat").click(function(){
    var desc=$("#con_ncat").val();
    //var userid=$("#con_iduse").val();
    if(desc== ""){
      alert('Digite la nueva categoría');
    return false;
    }
    var chang="Agregar nueva categoría para viaje";
        $.ajax({
              type:"GET",
              data: {'n_cat':desc},
              url:"insertNewCategory",
              success:function(data){
                if(data==1){
                  alert("La nueva categoría se agregó satisfactoriamente!");
                  $.ajax({
                        type:"GET",
                        data: {'chg':chang},
                        url:"SystemLogRegistry",
                         success:function(data){
                         if(data==1){

                          }
                          }
                  });
                  window.location.replace("GetTourCategory");
                }else{
                  alert("No se logró agregar la nueva categoría!");
                  window.location.replace("GetTourCategory");
                }
              }
        });
  });

  $("#t_caT").on('click','#con_updTC',function(){
    var id = $(this).data('id');

    $.ajax({
        type:"GET",
        data: {'id':id},
        url:"selectTourCategoryByID",
        success:function(data){

          var id_bcs="";
          var desc_bcs="";
          $.each(data,function(v){
              var val=data[v];
              id_bcs=val['ID_Categoria'];
              desc_bcs=val['Descripcion'];


          })
          $("#con_tourcatdes").val(desc_bcs);
          $("#btntourcat").data('id',id_bcs);

          $('#tourcatModal').modal('show');
          $('#tourcatModal').modal('toggle');


        }

    });
  });
  $("#tourcatModal").on('click','#btntourcat',function(){
    var id=$(this).data('id');
    var desc=$("#con_tourcatdes").val();
    //var userid=$("#con_iduse").val();
    var chang="Actualizar categoría de viaje";
            $.ajax({
                type:"GET",
                data: {'id':id,
                        'des':desc},
                url:"updateTourCategory",
                success:function(data){
                  if(data==1){
                    alert("Categoría de viaje actualizada satisfactoriamente!");
                    $.ajax({
                          type:"GET",
                          data: {'chg':chang},
                          url:"SystemLogRegistry",
                           success:function(data){
                           if(data==1){

                            }
                            }
                    });
                    window.location.replace("GetTourCategory");
                  }else{
                    alert("No se logró actualizar la categoría de viajes!");
                    window.location.replace("GetTourCategory");
                  }
                }
  });
});
});
