$(document).ready(function(){

  $.ajax({

          type:"GET",
          data: {},
          url:"selectProduct",

  $.each(data,function(i,value){
    var tr =$("<tr/>");
        tr.append($("<td/>",{
      text: value.ID_Producto
    })).append($("<td/>",{
      text: value.nombre
    })).append($("<td/>",{
      text: value.descripcion
    })).append($("<td/>",{
    text: "HELLO"
      }))
    $("#product-info").append(tr);
  });
});
$("#con_addp").click(function(){
  var idus= 1;
  var pname = $("#con_nomp").val();
  var pdesc = $("#con_descp").val();

          if(pname == ""){
            alert('Digite el nombre del producto');
           return false;
          }
          if(pdesc == ""){
              alert('Digite la descripción del producto');
           return false;
          }
          $.ajax({
                type:'GET',
                data: {'userid':idus,
                        'prname':pname,
                        'pdescr':pdesc,
                      },

                url:'AddProduct',
                success: function(data) {

                    alert("Producto Ingresado con éxito!");

                  }
                });
                });
                $("#uploadFile").change(function(){
         $('#image_preview').html("");
         var total_file=document.getElementById("uploadFile").files.length;

         for(var i=0;i<total_file;i++)
         {
          $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
         }

      });

      $('form').ajaxForm(function()
       {
        alert("Uploaded SuccessFully");
       });
  
    });
