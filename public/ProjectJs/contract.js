$(document).ready(function(){
        $.ajax({
                type:"GET",
                data: {},
                url:"selectNewContract",
                success:function(data){

                  if(data!=""){
                    var html="";
                    htlm='<div>';
                    $.each(data,function(v){
                      var val=data[v];
                      html+='<div class="col-md-12 col-sm-12 col-lg-12"><label>Encabezado</label></div>';
                      html+='<div class="col-md-3 col-sm-3 col-lg-3">Número de Solicitud:<input type="text" value="'+val['ID_Contratacion']+'"/></div>';
                      html+='<div class="col-md-3 col-sm-3 col-lg-3">Estado:<input type="text" id="con_estado" value="'+val['Descripcion_Est']+'"/></div>';
                      html+='<div class="col-md-3 col-sm-3 col-lg-3">Fecha:<input type="text" value="'+val['FechaTramite']+'"/></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12"><label>Cliente</label></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12">Solicitado Por:<input type="text" value="'+val['NombreCompleto']+' '+val['PrimerApellido']+' '+val['SegundoApellido']+'"/></div>';
                      html+='<div class="col-md-5 col-sm-5 col-lg-5">Teléfono:<input type="text" value="'+val['NumeroTelefonico']+'"/></div>';
                      html+='<div class="col-md-7 col-sm-7 col-lg-7">Correo Electrónico:<input type="text" value="'+val['CorreoElectronico']+'"/></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12"><label>Datos de la Contratación:</label></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12">Servicio:<input type="text" value="'+val['Descripcion_ts']+'"/></div>';
                      html+='<div class="col-md-6 col-sm-6 col-lg-6">Tipo de Evento:<input type="text" value="'+val['Descripcion_Te']+'"/></div>';
                      html+='<div class="col-md-6 col-sm-6 col-lg-6">Fecha del Evento:<input type="text" value="'+val['FechaServicio']+'"/></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12">Descripción:<textarea>'+val['Descripcion']+'</textarea></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12"><label>Acciones:</label></div>';
                      html+='<div class="col-md-4 col-sm-4 col-lg-4"><button class="btn btn-success" type="button" id="con_approveC" data-id="'+val['ID_Contratacion']+'">Aprobar</button></div>';
                      html+='<div class="col-md-4 col-sm-4 col-lg-4"><button class="btn btn-primary" type="button" id="con_processC" data-id="'+val['ID_Contratacion']+'">Procesar</button></div>';
                      html+='<div class="col-md-4 col-sm-4 col-lg-4"><button class="btn btn-danger" type="button" id="con_rejectC" data-id="'+val['ID_Contratacion']+'">Rechazar</button></div>';
                    });
                    html+='</div>';
                      $("#con_content").html(html);
                  }else{
                      window.location.replace("GetNoObjectInternal");
                  }
                }
              });
      $("#con_content").on('click','#con_approveC',function(){
              $('#newContractApp-Modal').modal('show');
              var id=$(this).data('id');
                $.ajax({
                  type:"GET",
                  data: {'id':id},
                  url:"selectNewContractToApprove",
                  success:function(data){
                      $("#modalBodyNContract").html(data);
                  }
                });
        });


      $("#con_content").on('click','#con_processC',function(){
          var id = $(this).data('id');
          $('#processModal').modal('show');
          //$('#processModal').modal('toggle');
          $("#btn_proNC").data('id',id);
          });

      $("#processModal").on('click','#btn_proNC',function(){
                var id=$(this).data('id');
                //var userid=$("#con_iduse").val();
                var chang="Procesar nueva contratación";
                var just=$("#p_justDesc").val();
                    $.ajax({
                      type:"GET",
                      data: {},
                      url:"selectRemainingStatus",
                      success:function(data){
                        var est_id="";
                        $.each(data,function(v){
                          var val=data[v];
                          est_id=val['ID_Estado'];
                        });
                        $.ajax({
                          type:"GET",
                          data: {'id':id,
                                  'id_s':est_id},
                          url:"ProcessContract",
                          success:function(data){
                            if(data==1){
                              alert("La contratación cambió a estdo  'Pendiente'");
                              $.ajax({
                                    type:"GET",
                                    data: {'chg':chang},
                                    url:"SystemLogRegistry",
                                     success:function(data){

                                      }
                                  });

                              $.ajax({

                                    type:"GET",
                                    data: {'id':id,
                                          'just':just},
                                        url:"NotifyContractProcess",
                                      success:function(data){

                                        if(data==1){
                                        alert("Se notificaron los involucrados en el proceso!");
                                        window.location.replace("GetNewContract");
                                      }else{
                                        alert("No se logró notificar a los involucrados en el proceso!");
                                        window.location.replace("GetNewContract");
                                      }
                                    }

                              });

                            }else{
                              alert("No se logró iniciar el proceso de ocntratación");
                              window.location.replace("GetNewContract");
                            }
                          }
                        });
                        }
                    });
                  });
      $("#con_content").on('click','#con_rejectC',function(){
          var id = $(this).data('id');
          $('#rejectModal').modal('show');
          //$('#processModal').modal('toggle');
          $("#btn_rejNC").data('id',id);
          });

      $("#rejectModal").on('click','#btn_rejNC',function(){
                var id=$(this).data('id');
                var just=$("#r_justDesc").val();
                //var userid=$("#con_iduse").val();
                var chang="Rechazar nueva contratación";
                    $.ajax({
                      type:"GET",
                      data: {},
                      url:"selectRejectedStatus",
                      success:function(data){
                        var est_id="";
                        $.each(data,function(v){
                          var val=data[v];
                          est_id=val['ID_Estado'];
                        });
                        $.ajax({
                          type:"GET",
                          data: {'id':id,
                                  'id_s':est_id},
                          url:"RejectContract",
                          success:function(data){
                            if(data==1){
                              alert("La contratación ha sido rechazada");
                              $.ajax({
                                    type:"GET",
                                    data: {'hg':chang},
                                    url:"SystemLogRegistry",
                                     success:function(data){

                                      }
                                    });
                              $.ajax({

                                    type:"GET",
                                    data: {'id':id,
                                          'just':just},
                                        url:"NotifyContractRejected",
                                      success:function(data){

                                        if(data==1){
                                        alert("Se notificaron los involucrados en el proceso!");
                                        window.location.replace("GetNewContract");
                                      }else{
                                        alert("No se logró notificar a los involucrados en el proceso!");
                                        window.location.replace("GetNewContract");
                                      }
                                    }

                              });

                            }else{
                              alert("No se logró rechazar la ocntratación");
                              window.location.replace("GetNewContract");
                            }
                          }
                        });
                        }
                    });
                  });
});
