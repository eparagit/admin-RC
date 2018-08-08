$(document).ready(function(){

       $.ajax({
               type:"GET",
               data: {},
               url:"selectRol",
               success:function(data)
               {
                   var slec="";
                   $.each(data,function(v){
                     var val=data[v];
                     slec+="<option value='"+val['ID_Rol']+"'>"+val['Descripcion']+"</option>";
                   });
                    $("#rol").append(slec);
                    $("#con_rols").append(slec);
                 }
               });
        $.ajax({
                type:"GET",
                data: {},
                url:"selectAllRol",
                success:function(data)
                    {
                      var tab="";
                        $.each(data,function(v){
                          var val=data[v];
                          tab+="<tr>";
                          tab+="<td>"+val['ID_Rol']+"</td>";
                          tab+="<td>"+val['Codigo_Rol']+"</td>";
                          tab+="<td>"+val['Descripcion']+"</td>";
                          tab+="<tr>";
                      });
                         $("#trol").append(tab);

                      }

                 });
          $.ajax({
                  type:"GET",
                  data: {},
                  url:"selectUserByRol",
                  success:function(data)
                  {
                    var tab="";
                      $.each(data,function(v){
                        var val=data[v];
                        tab+="<tr>";
                        tab+="<td>"+'<label id="con_iduser">'+val['ID_Usuario']+'</label>'+"</td>";
                        tab+="<td>"+val['NombreCompleto']+"</td>";
                        tab+="<td>"+val['PrimerApellido']+"</td>";
                        tab+="<td>"+val['SegundoApellido']+"</td>";
                        tab+="<td>"+val['CorreoElectronico']+"</td>";
                        tab+="<td>"+'<label id="con_rolde">'+val['Descripcion_Rol']+'</label>'+"</td>";
                        tab+="<td>"+'<button id="con_ur" class="btn btn-success"  data-id="'+val['ID_Usuario']+'" type="button">Modificar</button>'+"</td>";
                        tab+="<tr>";


                      //  data-toggle="modal" data-target="#rolChange"
                    });
                       $("#tusxrol").append(tab);

                      }

                    });
                    /*$("#t_ubr").on('click','#con_ur',function(){
                      var id = $(this).data('id');

                      $.ajax({
                          type:"GET",
                          data: {'id':id},
                          url:"selectUserByID",
                          success:function(data){
                            var id_u="";
                            var name_u="";
                            var ln_u="";
                            var ro_u="";
                            $.each(data,function(v){
                                var val=data[v];
                                id_u=val['ID_Usuario'];
                                name_u=val['NombreCompleto']+' '+val['PrimerApellido'];
                                //ln_u=val['PrimerApellido'];
                                ro_u=val['Descripcion_Rol'];

                            })
                            $("#id_iuser").val(id_u);
                            $("#c_name").val(name_u);
                          //  $("#l_name").val(ln_u);
                            $("#curr_r").val(ro_u);

                            $('#rolChange').modal('show');
                            $('#rolChange').modal('toggle');
                          //  $('#rmodal-footer').modal('show');

                          }

                      });
                    });*/
                    $("#tusxrol").on('click','#con_ur',function(){
                      var id=$(this).data('id');                    
                      $('#rolChanges').modal('show');
                      $('#con_upRol').data('id',id);
                      $.ajax({
                          type:"GET",
                          data: {'id':id},
                          url:"selectUserByID",
                          success:function(data){
                            var id_u="";
                            var name_u="";
                            var ln_u="";
                            var ro_u="";
                            $.each(data,function(v){
                                var val=data[v];
                                id_u=val['ID_Usuario'];
                                name_u=val['NombreCompleto']+' '+val['PrimerApellido'];
                                //ln_u=val['PrimerApellido'];
                                ro_u=val['Descripcion_Rol'];

                            })
                            $("#id_iuser").val(id_u);
                            $("#c_name").val(name_u);
                          //  $("#l_name").val(ln_u);
                            $("#curr_r").val(ro_u);


                          //  $('#rolChange').modal('toggle');
                          //  $('#rmodal-footer').modal('show');

                          }

                      });
                    });

                    $("#rolChanges").on('click','#con_upRol',function(){
                      var id=$(this).data('id');
                      var nr=$("#con_rols").val();
                      var chang="Cambio de Rol";
                      $.ajax({
                        type:"GET",
                        data: {'id_us':id,
                                'n_ru':nr},
                        url:"updateURol",
                        success: function(data) {
                          if(data = 1){
                            alert("Rol actualizado exitosamente!");
                            window.location.replace("GetUserByRol");
                            $.ajax({
                                    type:"GET",
                                    data: {'u_id':id,
                                    'chg':chang},
                                    url:"SystemLogRegistry",
                                     success:function(data){
                                     if(data==1){

                                      }
                                      }
                              });


                          }else{
                            alert("No se logró actualizar el rol!");
                            window.location.replace("GetUserByRol");
                          }
                        }
                      });
                    });

  });
