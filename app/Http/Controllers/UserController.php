<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

Use Session;
class UserController extends Controller
{
    //
    public function validateNewUser(Request $request)
    {

      $email = $request['email'];
      $userName = $request['userName'];

      $result= DB::select("select * from usuario where NombreUsuario='".$userName."' and CorreoElectronico='".$email."'");
      //  var_dump($result);die;
      $array = json_decode(json_encode($result), True);
      $data=0;
        if(empty($array)){
          $data=0;
        }else{
          $data=1;
        }

        return $data;
    }
    public function registerUser(Request $request){
      $firstName = $request['name'];
      $firstLastName = $request['firstLastName'];
      $secondLastName = $request['secondLastName'];
      $idNumber = $request['idNumber'];
      $age = $request['age'];
      $email = $request['email'];
      $telephone = $request['telephone'];
      $userName = $request['userName'];
      $password = $request['password'];
      $rolID = $request['rol'];

      DB::insert('insert into usuario (rol_ID,NombreCompleto,PrimerApellido,SegundoApellido,NumeroIdentificacion,Edad,CorreoElectronico,NumeroTelefonico,NombreUsuario,Contrasena,Tipo_Login) values (?,?,?,?,?,?,?,?,?,?,?)',  [$rolID,$firstName, $firstLastName,$secondLastName,$idNumber,$age,$email,$telephone,$userName,$password,"Temporal"]);
      return 1;
    }
    public function selectAdUser(){
      $result= DB::select("select NombreCompleto,PrimerApellido,SegundoApellido,CorreoElectronico,NombreUsuario from usuario where rol_ID = '1'");
            $array = json_decode(json_encode($result), True);
  return $array;
    }
    public function selectISUser(){
      $result= DB::select("select NombreCompleto,PrimerApellido,SegundoApellido,CorreoElectronico,NombreUsuario from usuario where rol_ID = '2'");
            $array = json_decode(json_encode($result), True);
  return $array;
}
    public function selectESUser(){
      $result= DB::select("select NombreCompleto,PrimerApellido,SegundoApellido,CorreoElectronico,NombreUsuario from usuario where rol_ID = '3'");
            $array = json_decode(json_encode($result), True);
  return $array;
    }
    public function selectUserByEmail(Request $request){

    //  $email = $request['email'];
    //  $result= DB::select("select ID_Usuario,rol_ID,NombreCompleto,PrimerApellido,SegundoApellido,NumeroIdentificacion,Edad,CorreoElectronico,NumeroTelefonico,NombreUsuario from usuario where CorreoElectronico ='".$email."'");
          //  $array = json_decode(json_encode($result), True);
//  return $array;


    $email = $request['email'];
   $result= DB::select("select u.ID_Usuario,u.rol_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,u.NumeroIdentificacion,u.Edad,
   u.CorreoElectronico,u.NumeroTelefonico,u.NombreUsuario, r.Descripcion, r.Codigo_Rol from usuario u, rol r where u.CorreoElectronico ='".$email."' and u.rol_ID = r.ID_Rol");
    $array = json_decode(json_encode($result), True);
return $array;
//return view('Admin.profile');No use

    }
    public function updateUser(Request $request){
      $id_user = $request['id'];
      $firstName = $request['name'];
      $firstLastName = $request['firstLastName'];
      $secondLastName = $request['secondLastName'];
      $idNumber = $request['idNumber'];
      $age = $request['age'];
      $email = $request['email'];
      $telephone = $request['telephone'];
      $userName = $request['userName'];
      $reuslt = DB::update("update usuario set NombreCompleto='".$firstName."',PrimerApellido='".$firstLastName."',
      SegundoApellido='".$secondLastName."',NumeroIdentificacion='".$idNumber."',Edad='".$age."',
      CorreoElectronico='".$email."',NumeroTelefonico='".$telephone."',NombreUsuario='".$userName."'
      where ID_Usuario='".$id_user."' ");
      return 1;
    }

    public function selectUserByRol(){

          $result= DB::select("select u.ID_Usuario,u.rol_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
          u.CorreoElectronico,u.NombreUsuario,r.ID_RoL ID_Rol, r.Descripcion Descripcion_Rol, r.Codigo_Rol from usuario u, rol r where u.rol_ID=r.ID_RoL and u.rol_ID<'3'");
          $array = json_decode(json_encode($result), True);

     return $array;

    }
    public function selectUserByID(Request $request){

          $id_user = $request['id'];

          $result= DB::select("select u.ID_Usuario,u.rol_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
          u.CorreoElectronico,u.NombreUsuario,r.ID_RoL ID_Rol, r.Descripcion Descripcion_Rol, r.Codigo_Rol from usuario u, rol r where u.ID_Usuario='".$id_user."' and u.rol_ID=r.ID_RoL and u.rol_ID<'3'");

          $array = json_decode(json_encode($result), True);

     return $array;

    }
    public function updateURol(Request $request){
      $id_user=$request['id_us'];
      $n_rol=$request['n_ru'];

      $result=DB::update("update usuario set rol_ID='".$n_rol."' where ID_Usuario='".$id_user."'");

      return 1;

    }
    public function selectUsersReportByRol(){

      $result= DB::select("select u.NumeroIdentificacion,u.rol_ID,u.NombreCompleto,u.PrimerApellido,
       u.SegundoApellido,r.Descripcion Descripcion_Rol from usuario u, rol r where  u.rol_ID=r.ID_RoL and u.rol_ID<'3'");

      $array = json_decode(json_encode($result), True);

 return $array;

    }
    public function PasswordReset(Request $request){
      $u_id=$request['id'];
      $u_pass=$request['pass'];
      $result=DB::update("update usuario set Contrasena='".$u_pass."',Tipo_Login='Temporal' where ID_Usuario='".$u_id."'");
      return 1;
    }
}
