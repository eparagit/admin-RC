$(document).ready(function(){

           $.ajax({
                type:"GET",
                data: {},
                url:"showProducts",
                success:function(data)
                {
                      $("#t_product").html(data);
                }

             });

          $("#t_product").on('click','#btn_mod_product',function(){
            var id = $(this).data('id');
             $.ajax({
              type:"GET",
              data: {'id':id},
              url:"selectProductForUpdate",
              success:function(data){
                      $("#modalBodyProducto").html(data);
                      $('#updateProducto-Modal').modal('show');
                  }
                });
          });

          $("#t_product").on('click','#btn_rech_product',function(){
            var id = $(this).data('id');
            $.ajax({
             type:"GET",
             data: {'id':id},
             url:"deleteProduct",
             success:function(data){
                 $.ajax({
                      type:"GET",
                      data: {},
                      url:"showProducts",
                      success:function(data)
                      {
                           $("#productDiv").html(data);
                      }

                   });
             }
           });

          });
});
