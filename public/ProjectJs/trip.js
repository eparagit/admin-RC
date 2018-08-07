$(document).ready(function(){

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
         $("#tviaje").append(slec);
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
         $("#cviaje").append(slec);
      }
    });

});
