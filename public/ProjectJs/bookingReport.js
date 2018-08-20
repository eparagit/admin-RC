$(document).ready(function(){
  $.ajax({
       type:"GET",
       data: {},
       url:"selectBookingReport",
       success:function(data)
       {// console.log(data);
         $('#bookingTableReport').dataTable( {
                 data: data,
                 dom: 'Bfrtip',
                 "columns": [
                                   { "data": "NombreCompleto" },
                                   { "data": "PrimerApellido" },
                                   { "data": "CorreoElectronico" },
                                   { "data": "Titulo" },
                                   { "data": "Cantidad_Personas" }
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
