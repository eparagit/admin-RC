$(document).ready(function() {

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


});
