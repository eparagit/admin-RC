$(document).ready(function(){
jQuery.datetimepicker.setLocale('es');

         $.ajax({
              type:"GET",
              data: {},
              url:"selectNewTours",
              success:function(data)
              {
                    $("#t_tours").html(data);
              }

           });

         $("#t_tours").on('click','#btn_apr',function(){
             var id = $(this).data('id');
             $.ajax({
                     type:"GET",
                     data: {'id':id},
                     url:"ApproveTour",
                     success:function(data){
                         $.ajax({
                              type:"GET",
                              data: {},
                              url:"selectNewTours",
                              success:function(data)
                              {
                                   $("#toursDiv").html(data);
                              }

                           });
                     }
             });
         });
         $("#t_tours").on('click','#btn_mod',function(){
              var id = $(this).data('id');
               $.ajax({
                type:"GET",
                data: {'id':id},
                url:"selectTourForUpdate",
                success:function(data){
                  $("#modalBodyTour").html(data);
                  //Modal Dates
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
                       $("#tviaje_modal").append(slec);
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
                       $("#cviaje_modal").append(slec);
                       $('#con_dtfhs_modal').datetimepicker({
                         format: 'd/m/Y h:i:s A',
                         formatTime:'h:i:s d',
                         ampm: true
                       });
                       $('#con_dtfhr_modal').datetimepicker({
                         format: 'd/m/Y h:i:s A',
                         formatTime:'h:i:s d',
                         ampm: true
                       });
                       $('#con_dtfhv_modal').datetimepicker({
                         format: 'd/m/Y h:i:s A',
                         formatTime:'h:i:s d',
                         ampm: true
                       });
                       var tipoViaje = $("#valueTipViaje_ModalInput").val();
                       var categoriaViaje = $("#valueCatViaje_ModalInput").val();
                       $("#tviaje_modal").val(tipoViaje);
                       $("#cviaje_modal").val(categoriaViaje);
                       $('#updateTour-Modal').modal('show');
                    }
                  });
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
                    $.ajax({
                         type:"GET",
                         data: {},
                         url:"selectNewTours",
                         success:function(data)
                         {
                              $("#toursDiv").html(data);
                         }

                      });
                }
              });
        });

});
