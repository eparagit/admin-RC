$(document).ready(function(){
  //Admin User Secction-Start//
  $.ajax({
          type:"GET",
          data:{},
          url:"selectISUser",
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
                 $("#allUsers").hide();
                 $("#selectedUser").show();
                 var email = $(this).data('id');
                 var cname="";
                 $.ajax({
                       type:'GET',
                       data: {'email':email},
                       url:'selectUserByEmail',
                       success: function(data) {

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
    var userid=$("#con_iduse").val();
    var chang="Actualizar perfil de usuario estandar interno";
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
        $.ajax({
        type:"GET",
        data: {'u_id':userid,
        'chg':chang},
        url:"SystemLogRegistry",
         success:function(data){
         if(data==1){

          }
          }
  });
      }else{
        alert("Error al actualizar!");

      }
    }
  });
  });
});
