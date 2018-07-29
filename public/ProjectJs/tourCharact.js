$(document).ready(function(){

    $("#cat-Modal").on('click','#con_addct',function(){

      var cat_name=$("#con_cat_name").val();
      $.ajax({
            type:"GET",
            data: {'n_cat':cat_name},
            url:"insertNewCategory",
            success:function(data){
              if(data==1){
                alert("Categoría agregada satisfactoriamente!");
              }else{
                alert("No se logró agregar la categoría!");
              }
            }
      });
    });
});
