$(document).ready(function(){
  $.ajax({
       type:"GET",
       data: {},
       url:"selectReportForBooking",
       success:function(data)
       {// console.log(data);
         $('#bookingTableReport').dataTable( {
                 data: data,
                 dom: 'Bfrtip',
                 "columns": [
                                   { "data": "ID_Reservacion" },
                                   { "data": "Titulo" },
                                   { "data": "FechaHora_Salida" },
                                   { "data": "Lugar_Salida" },
                                   { "data": "NombreCompleto" }
                               ],
                 //"sDom": '<"H"ilr><"clear">t<"F"p>',
                   language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                  },
                  buttons: [
                    'copy'
                  ]
                 //"pageLength": 5
             });
       }

    });
  $.ajax({
         type:"GET",
         data: {},
         url:"selectApprovedBookingByCustomer",
         success:function(data)
         {// console.log(data);
           $('#AbookingTableReport').dataTable( {
                   data: data,
                   dom: 'Bfrtip',
                   "columns": [
                                     { "data": "ID_Reservacion" },
                                     { "data": "Titulo" },
                                     { "data": "NombreCompleto" },
                                     { "data": "Cantidad_Personas" },
                                     { "data": "Estado_Descripcion" }
                                 ],
                   //"sDom": '<"H"ilr><"clear">t<"F"p>',
                     language: {
                      "decimal": "",
                      "emptyTable": "No hay información",
                      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                      "infoPostFix": "",
                      "thousands": ",",
                      "lengthMenu": "Mostrar _MENU_ Entradas",
                      "loadingRecords": "Cargando...",
                      "processing": "Procesando...",
                      "search": "Buscar:",
                      "zeroRecords": "Sin resultados encontrados",
                      "paginate": {
                          "first": "Primero",
                          "last": "Ultimo",
                          "next": "Siguiente",
                          "previous": "Anterior"
                      },
                    },
                    buttons: [
                      'copy'
                    ]
                   //"pageLength": 5
               });
         }

      });
  $.ajax({
             type:"GET",
             data: {},
             url:"selectRemainingBookingByCustomer",
             success:function(data)
             {// console.log(data);
               $('#RbookingTableReport').dataTable( {
                       data: data,
                       dom: 'Bfrtip',
                       "columns": [
                                         { "data": "ID_Reservacion" },
                                         { "data": "Titulo" },
                                         { "data": "NombreCompleto" },
                                         { "data": "Cantidad_Personas" },
                                         { "data": "Estado_Descripcion" }
                                     ],
                       //"sDom": '<"H"ilr><"clear">t<"F"p>',
                         language: {
                          "decimal": "",
                          "emptyTable": "No hay información",
                          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                          "infoPostFix": "",
                          "thousands": ",",
                          "lengthMenu": "Mostrar _MENU_ Entradas",
                          "loadingRecords": "Cargando...",
                          "processing": "Procesando...",
                          "search": "Buscar:",
                          "zeroRecords": "Sin resultados encontrados",
                          "paginate": {
                              "first": "Primero",
                              "last": "Ultimo",
                              "next": "Siguiente",
                              "previous": "Anterior"
                          },
                        },
                        buttons: [
                          'copy'
                        ]
                       //"pageLength": 5
                   });
             }

          });
});
