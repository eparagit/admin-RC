$(document).ready(function(){
        $.ajax({
                type:"GET",
                data: {},
                url:"selectNewBooking",
                success:function(data){

                  if(data!=""){
                    var html="";
                    htlm='<div>';
                    $.each(data,function(v){
                      var val=data[v];
                      html+='<div class="col-md-12 col-sm-12 col-lg-12"><label>Encabezado</label></div>';
                      html+='<div class="col-md-3 col-sm-3 col-lg-3">Número de Reservación:<input type="text" value="'+val['ID_Reservacion']+'"/></div>';
                      html+='<div class="col-md-3 col-sm-3 col-lg-3">Estado:<input type="text" id="con_estado" value="'+val['Descripcion_Est']+'"/></div>';
                      html+='<div class="col-md-3 col-sm-3 col-lg-3">Fecha:<input type="text" value="'+val['FechaHora']+'"/></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12"><label>Cliente</label></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12">Nombre Completo:<input type="text" value="'+val['NombreCompleto']+' '+val['PrimerApellido']+' '+val['SegundoApellido']+'"/></div>';
                      html+='<div class="col-md-5 col-sm-5 col-lg-5">Teléfono:<input type="text" value="'+val['NumeroTelefonico']+'"/></div>';
                      html+='<div class="col-md-7 col-sm-7 col-lg-7">Correo Electrónico:<input type="text" value="'+val['CorreoElectronico']+'"/></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12"><label>Datos de la Reservación:</label></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12">Título del Viaje:<input type="text" value="'+val['Titulo']+'"/></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12">Descripción:<textarea>'+val['Descripcion_Viaje']+'</textarea></div>';
                      html+='<div class="col-md-12 col-sm-12 col-lg-12"><label>Acciones:</label></div>';
                      html+='<div class="col-md-4 col-sm-4 col-lg-4"><button class="btn btn-success" type="button" id="con_approveB" data-id="'+val['ID_Reservacion']+'">Aprobar</button></div>';
                      html+='<div class="col-md-4 col-sm-4 col-lg-4"><button class="btn btn-primary" type="button" id="con_processB" data-id="'+val['ID_Reservacion']+'">Procesar</button></div>';
                      html+='<div class="col-md-4 col-sm-4 col-lg-4"><button class="btn btn-danger" type="button" id="con_rejectB" data-id="'+val['ID_Reservacion']+'">Rechazar</button></div>';
                    });
                    html+='</div>';
                      $("#con_content").html(html);
                  }else{
                      window.location.replace("GetNoObjectInternal");
                  }
                }
        });
        $("#con_content").on('click','#con_approveB',function(){
                var id=$(this).data('id');
              //  var userid=$("#con_iduse").val();
                var chang="Aprobación de nueva reservación";

                    $.ajax({
                      type:"GET",
                      data: {},
                      url:"selectApprovedStatus",
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
                          url:"ApproveBooking",
                          success:function(data){
                            if(data==1){
                              alert("Reservación aprobada exitosamente!");
                                    $.ajax({
                                          type:"GET",
                                          data: {'chg':chang},
                                          url:"SystemLogRegistry",
                                          success:function(data){}
                                            });
                              $.ajax({
                                    type:"GET",
                                    data: {'id':id},
                                    url:"NotifyBookingApproval",
                                    success:function(data){
                                    
                                      if(data==1){

                                            alert("Se realizaron las notificaciones a los interesados!");
                                           window.location.replace("GetNewBooking");

                                      }else{

                                            alert("No se logró notificar a los interesados!");
                                           window.location.replace("GetNewBooking");
                                      }
                                    }
                                    });

                            }else{
                              alert("No se logró aprobar la reservación!");
                             window.location.replace("GetNewBooking");
                            }
                          }
                        });

                        }

                    });

        });
        $("#con_content").on('click','#con_processB',function(){
          var id = $(this).data('id');
          $('#processModal').modal('show');
          //$('#processModal').modal('toggle');
          $("#btn_proNB").data('id',id);
          });
        $("#processModal").on('click','#btn_proNB',function(){
                var id=$(this).data('id');
                var just=$("#p_justDesb").val();
                //var userid=$("#con_iduse").val();
                var chang="Procesar nueva Reservación";
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
                          url:"ProcessBooking",
                          success:function(data){
                            if(data==1){
                              alert("La reservación cambió a estdo  'Pendiente'");
                              $.ajax({
                                      type:"GET",
                                      data: {'chg':chang},
                                      url:"SystemLogRegistry",
                                       success:function(data){
                                       if(data==1){

                                        }
                                        }
                                        });
                              $.ajax({
                                    type:"GET",
                                    data: {'id':id,
                                          'just':just},
                                        url:"NotifyBookingProcess",
                                      success:function(data){
                                        if(data==1){
                                        alert("Se notificaron los involucrados en el proceso!");
                                          window.location.replace("GetNewBooking");
                                      }else{
                                        alert("No se logró notificar a los involucrados en el proceso!");
                                            window.location.replace("GetNewBooking");
                                      }
                                    }

                              });
                              window.location.replace("GetNewBooking");
                            }else{
                              alert("No se logró iniciar el proceso de reservación");
                              window.location.replace("GetNewBooking");
                            }
                          }
                        });
                        }
                    });
        });
        $("#con_content").on('click','#con_rejectB',function(){
          var id = $(this).data('id');
          $('#rejectModal').modal('show');
          //$('#processModal').modal('toggle');
          $("#btn_rejNB").data('id',id);
          });
        $("#rejectModal").on('click','#btn_rejNB',function(){
                var id=$(this).data('id');
                var just=$("#r_justDesb").val();
                //var userid=$("#con_iduse").val();
                var chang="Rechazar nueva reservación";
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
                          url:"RejectBooking",
                          success:function(data){
                            if(data==1){
                              alert("La reservación ha sido rechazada");
                              $.ajax({
                                    type:"GET",
                                    data: {'chg':chang},
                                    url:"SystemLogRegistry",
                                     success:function(data){
                                     if(data==1){

                                      }
                                      }
                                      });
                              $.ajax({

                                    type:"GET",
                                    data: {'id':id,
                                          'just':just},
                                        url:"NotifyBookingRejected",
                                      success:function(data){

                                        if(data==1){
                                        alert("Se notificaron los involucrados en el proceso!");
                                        window.location.replace("GetNewBooking");
                                      }else{
                                        alert("No se logró notificar a los involucrados en el proceso!");
                                        window.location.replace("GetNewBooking");
                                      }
                                    }

                              });

                            }else{
                              alert("No se logró rechazar la reservación");
                              window.location.replace("GetNewBooking");
                            }
                          }
                        });
                        }
                    });
        });
});
