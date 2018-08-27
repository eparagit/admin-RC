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
      var email = $("#con_correoe").val();
      var username = $("#con_nombreusuario").val();
      var password = $("#con_contrasena").val();
      var rol = $("#rol").val();
      var userid=$("#con_iduse").val();
      var chang="Registrar Usuario de tipo estandar administrador o interno";
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
            if(phone== ""){
               var validEmail=email_Validation(email);
                    if(validEmail==false){
                       alert('Correo Inválido');
                    }else{
                    var idVal=idNumber_Validation(id);
                    if(idVal==false){
                      alert("Número de identificación inválido!");
                    }else{
                      var nameVal=text_Validation(name);
                      var flastnameVal=text_Validation(LastName);
                      var slastnameVal=text_Validation(secondLastName);
                      if(nameVal==false){
                        alert("El campo nombre solo permite letras!");
                      }else{
                        if(flastnameVal==false){
                          alert("El campo primer apellido solo permite letras!");
                        }else{
                          if(slastnameVal==false){
                            alert("El campo segundo apellido solo permite letras!");
                          }else{
                            $.ajax({
                                  type:'GET',
                                  data: {
                                          'email':email,
                                          'userName':username
                                          },

                                  url:'validateNewUser',
                                  success: function(data) {
                                    if(data == 1){
                                      alert(data);
                                      alert("El usuario que intenta ingresar ya existe!");
                                      return false;
                                    }if(data==0){
                                      $.ajax({
                                            type:'GET',
                                            data: {'name':name,
                                                    'firstLastName':LastName,
                                                    'secondLastName':secondLastName,
                                                    'idNumber':id,
                                                    'email':email,
                                                    'telephone':phone,
                                                    'userName':username,
                                                    'password':password,
                                                     'rol':rol},

                                            url:'registerUser',
                                            success: function(data) {
                                              if(data = 1){
                                                alert("Usuario registrado con éxito!!");
                                                $.ajax({
                                                        type:"GET",
                                                        data: {'chg':chang},
                                                        url:"SystemLogRegistry",
                                                         success:function(data){
                                                         if(data==1){

                                                          }
                                                          }
                                                  });
                                              }else{
                                                alert("Nose logró registrar el usuario!");

                                              }

                                            }
                                          });
                                      }
                                  }
                                });
                          }
                       }

                        }
                    }

                  }
                  }else{
                  var validEmail=email_Validation(email);
                       if(validEmail==false){
                          alert('Correo Inválido');
                       }else{

                       var phoneVal=phone_Validation(phone);
                       if(phoneVal==false){
                         alert("Número de teléfono inválido!");
                           }else{
                       var idVal=idNumber_Validation(id);
                       if(idVal==false){
                         alert("Número de identificación inválido!");
                       }else{
                         var nameVal=text_Validation(name);
                         var flastnameVal=text_Validation(LastName);
                         var slastnameVal=text_Validation(secondLastName);
                         if(nameVal==false){
                           alert("El campo nombre solo permite letras!");
                         }else{
                           if(flastnameVal==false){
                             alert("El campo primer apellido solo permite letras!");
                           }else{
                             if(slastnameVal==false){
                               alert("El campo segundo apellido solo permite letras!");
                             }else{

                         $.ajax({
                               type:'GET',
                               data: {
                                       'email':email,
                                       'userName':username
                                       },

                               url:'validateNewUser',
                               success: function(data) {
                                 if(data == 1){
                                   alert(data);
                                   alert("El usuario que intenta ingresar ya existe!");
                                   return false;
                                 }if(data==0){
                                   $.ajax({
                                         type:'GET',
                                         data: {'name':name,
                                                 'firstLastName':LastName,
                                                 'secondLastName':secondLastName,
                                                 'idNumber':id,
                                                 'email':email,
                                                 'telephone':phone,
                                                 'userName':username,
                                                 'password':password,
                                                  'rol':rol},

                                         url:'registerUser',
                                         success: function(data) {
                                           if(data = 1){
                                             alert("Usuario registrado con éxito!!");
                                             $.ajax({
                                                     type:"GET",
                                                     data: {'chg':chang},
                                                     url:"SystemLogRegistry",
                                                      success:function(data){
                                                      if(data==1){

                                                       }
                                                       }
                                               });
                                               window.location.href = "GetRegisterUserAI";
                                           }else{
                                             alert("Nose logró registrar el usuario!");

                                           }

                                         }
                                       });
                                   }
                               }
                             });
                             }
                }

                           }
                           }
                           }
                     }
                }

  });
         $("#con_edcn").click(function(){
           $("#con_cname").prop('disabled',false);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_iden").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_idn").prop('disabled',false);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_ema").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',false);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_pho").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',false);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_usn").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
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
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         $("#con_edsln").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',false);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });
         /*$("#con_edage").click(function(){
           $("#con_cname").prop('disabled',true);
           $("#con_flastn").prop('disabled',true);
           $("#con_slastn").prop('disabled',true);
           $("#con_age").prop('disabled',false);
           $("#con_idn").prop('disabled',true);
           $("#con_email").prop('disabled',true);
           $("#con_uphone").prop('disabled',true);
           $("#con_unam").prop('disabled',true);
         });*/



          $("#con_save").click(function(){
            var id=$("#con_idu").val();
            var name = $("#con_cname").val();
            var LastName = $("#con_flastn").val();
            var secondLastName = $("#con_slastn").val();
            var idNumber = $("#con_idn").val();
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
function email_Validation(emailA){
  var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(emailA) ? true : false;
}
function phone_Validation(phoneV){
  var regex = /^[0-9-+](\d{7})$/;
  return regex.test(phoneV) ? true : false;
}
function idNumber_Validation(id_Number){
  var regex = /^([0-9])+$/;
  return regex.test(id_Number) ? true : false;
}
function text_Validation(text_data){
  var regex = /^([a-zA-Z])+$/;
  return regex.test(text_data) ? true : false;
}
$("#con_refresha").click(function(){
  var id=$("#con_idu").val();
  var pass=$("#con_passra").val();
  var chang="Cambio de contraseña a usuario:"+$("#con_unam").val();
        $.ajax({
                type:"GET",
                data:{'id':id,
                      'pass':pass},
                url:"PasswordReset",
                success:function(data){
                  if(data==1){
                    alert("La contraseña se refrescó exitosamente!!");
                    $.ajax({
                            type:"GET",
                            data: {'chg':chang},
                            url:"SystemLogRegistry",
                             success:function(data){

                              }
                      });
                  }else{
                    alert("No se logró refrescar la ocntraseña!");
                  }

                }
        });
})


});
