$(document).ready(function(){
  //Admin User Secction-Start//
  $.ajax({
          type:"GET",
          data:{},
          url:"selectAdUser",
          success:function(data)
              {
              var tab="";
              $.each(data,function(v){
                    var val=data[v];
                    tab+="<tr>";
                    tab+="<td>"+val['NombreCompleto']+"</td>";
                    tab+="<td>"+val['PrimerApellido']+"</td>";
                    tab+="<td>"+val['SegundoApellido']+"</td>";
                    tab+="<td>"+val['CorreoElectronico']+"</td>";
                    tab+="<td>"+val['NombreUsuario']+"</td>";
                    tab+="<td>"+'<button id="con_getprof" class="btn btn-success"  data-id="'+val['CorreoElectronico']+'" type="button">Editar</button>'+"</td>";
                    tab+="<tr>";
                });
                   $("#tuser").append(tab);

                 }
                });
              $("#tusers").on('click','#con_getprof',function(){
                var email = $(this).data('id');

                alert(email);
                $("#allUsers").hide();
                $("#selectedUser").show();

                $.ajax({
                      type:'GET',
                      data: {'email':email},
                      url:'selectUserByEmail',
                      success: function(data){
                           console.log(data);
                           var cnam ="";
                           var fln="";
                           var sln="";
                           var ag="";
                           var cid ="";
                           var rn ="";
                           var corr ="";
                           var tel="";
                           var una="";
                           var idus="";
                 $.each(data,function(v){
                   var val=data[v];
                     cnam = val['NombreCompleto'];
                     fln=val['PrimerApellido'];
                     sln=val['SegundoApellido'];
                     ag=val['Edad'];
                     cid = val['NumeroIdentificacion'];
                     corr=val['CorreoElectronico'];
                     tel=val['NumeroTelefonico'];
                     una=val['NombreUsuario'];
                     rn=val['Descripcion'];
                     idus=val['ID_Usuario'];
                 });
                     $("#con_cname").val(cnam);
                     $("#con_cname").prop('disabled',true);
                     $("#con_flastn").val(fln);
                     $("#con_flastn").prop('disabled',true);
                     $("#con_slastn").val(sln);
                     $("#con_slastn").prop('disabled',true);
                     $("#con_age").val(ag);
                     $("#con_age").prop('disabled',true);
                     $("#con_idn").val(cid);
                     $("#con_idn").prop('disabled',true);
                     $("#con_email").val(corr);
                     $("#con_email").prop('disabled',true);
                     $("#con_uphone").val(tel);
                     $("#con_uphone").prop('disabled',true);
                     $("#con_unam").val(una);
                     $("#con_unam").prop('disabled',true);
                     $("#con_urol").val(rn);
                     $("#con_urol").prop('disabled',true);
                     $("#con_idu").val(idus);
                     $("#con_idu").prop('disabled',true);
                     $("#con_idu").prop('hidden',true);
                 }
               });
             });


  $("#con_regist").click(function(){
      var name = $("#con_nombrecompleto").val();
      var LastName = $("#con_primerapellido").val();
      var secondLastName = $("#con_segundoapellido").val();
      var id = $("#con_identificacion").val();
      var phone = $("#con_numerotel").val();
      var age = $("#con_edad").val();
      var email = $("#con_correoe").val();
      var username = $("#con_nombreusuario").val();
      var password = $("#con_contrasena").val();
      var rol = $("#rol").val();

            if(name == ""){
              alert('Digite el nombre');
             return false;
            }
            if(LastName == ""){
                alert('Digite el primer apellido');
             return false;
            }
            if(secondLastName == ""){
                alert('Digite el segundo apellido');
             return false;
            }
            if(id == ""){
                alert('Digite su número de identificación');
             return false;
            }
             if(phone == ""){
               alert('Digite el teléfono');
             return false;
             }
             if(age == ""){
               alert('Digite su edad');
             return false;
             }
             if(email== ""){
                alert('Digite su correo');
              return false;
             }
             if(username == ""){
           alert('Digite el nombre de usuario');
             return false;
             }
             if(password == ""){
                alert('Digite la contraseña');
              return false;
             }
             if(rol == "0"){
                alert('Seleccione el rol');
              return false;
             }


            $.ajax({
                  type:'GET',
                  data: {'name':name,
                          'firstLastName':LastName,
                          'secondLastName':secondLastName,
                          'idNumber':id,
                          'age':age,
                          'email':email,
                          'telephone':phone,
                          'userName':username,
                          'password':password,
                           'rol':rol},

                  url:'validateNewUser',
                  success: function(data) {
                    if(data = 1){
                      alert("El usuario que intenta ingresar ya existe!");
                    }else{
                      alert("Usuario Ingresado con éxito!");

                    }
                  }
                });
  });
         $("#con_edcn").click(function(){
           $("#con_cname").prop('disabled',false);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_age").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_iden").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_age").prop('disabled',true);
           $("#con_idn").prop('disabled',false);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_ema").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_age").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',false);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_pho").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_age").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',false);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_usn").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_age").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',false);
          $("#con_usn").blur();
         });
         $("#con_edfln").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',false);
           $("#con_slastn").prop('disabled',true);
           $("#con_age").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_edsln").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',false);
           $("#con_age").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_edage").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_age").prop('disabled',false);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });



          $("#con_save").click(function(){
            var id=$("#con_idu").val();
            var name = $("#con_cname").val();
            var LastName = $("#con_flastn").val();
            var secondLastName = $("#con_slastn").val();
            var idNumber = $("#con_idn").val();
            var age = $("#con_age").val();
            var email = $("#con_email").val();
            var telephone=$("#con_uphone").val();
            var userName = $("#con_unam").val();
          $.ajax({
            type:'GET',
            data: {'id':id,
                    'name':name,
                    'firstLastName':LastName,
                    'secondLastName':secondLastName,
                    'idNumber':idNumber,
                    'age':age,
                    'email':email,
                    'telephone':telephone,
                    'userName':userName},
            url:'updateUser',
            success: function(data) {
              if(data = 1){
                alert("Usuario actualizado exitosamente!");
              }else{
                alert("Error al actualizar!");

              }
            }
          });
          });

});
