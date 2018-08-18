<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;


class AuthController extends Controller
{

    public function redirectPath(Request $request){



      $userName = $request['userName'];
      $password = $request['password'];
      $result= DB::select("select ID_Usuario,rol_ID,NombreCompleto,PrimerApellido,CorreoElectronico,NumeroTelefonico,NombreUsuario,Tipo_Login from usuario where NombreUsuario='".$userName."' and Contrasena='".$password."'");

      //$bd_result=DB::select("select count(ID_Usuario) from usuario where NombreUsuario='".$userName."'");

      $array = json_decode(json_encode($result), True);
        $t_login="";
        $r_id="";
      foreach($array as $data){
        $t_login=$data['Tipo_Login'];
        $r_id=$data['rol_ID'];
        $u_id=$data['ID_Usuario'];
      }

        $response = "";
      if(!empty($array) && $t_login=='Permanente'){
        if($r_id == 1){
          //return view('Admin.admin')->with(Session::put('datos', $array));
          Session::put('admin', $array);
            $response = 1;
        }
        if($r_id == 2){
        //  return view('Internal.adminI')->with(Session::put('datos', $array));
        Session::put('standard', $array);
          $response = 2;
        }
          }
        if(empty($array)){
          $response = 7;
        }

            if($t_login=='Temporal') {
              Session::put('change', $array);

               $response=9;
            }


              return $response;

    }

    public function logoutS(Request $request){

      Session::flush();
      //Session::flush();

      return 1;
    }

    public function passwordChange(Request $request){
      $userName = $request['usname'];
      $oldPassword = $request['old_pass'];
      $nPassword = $request['new_pass'];
      $sesion = Session::get('change');
      $userID = $sesion[0]['ID_Usuario'];

      $return="";
      $uname=DB::select("select NombreUsuario from usuario where ID_Usuario='".$userID."'");
      $userNamex = json_decode(json_encode($uname), True);

        if($userNamex[0]["NombreUsuario"] != $userName){
        $return=1;
        }else{
          $opass=DB::select("select Contrasena from usuario where ID_Usuario='".$userID."'");
          $OldPassword = json_decode(json_encode($opass), True);
          if($OldPassword[0]["Contrasena"] != $oldPassword){
            $return=2;
          }else{
            $result=DB::update("update usuario set Tipo_Login='Permanente',Contrasena='".$nPassword."' where ID_Usuario='".$userID."'");
              $return=3;
          }
        }
        return   $return;
    }
    public function restorePassword(Request $request)
    {
      $OldPassword = $request['oldPass'];
      $NewPassword = $request['newPass'];
      $response = "";
      $sesion = Session::get('datos');
      $userID = $sesion[0]['ID_Usuario'];

      $resultOldPass= DB::select("select Contrasena from usuario where ID_Usuario= ".$userID."");
      $realOldPassword = json_decode(json_encode($resultOldPass), True);
      if($realOldPassword[0]["Contrasena"] != $OldPassword){
        $response = "CONTRASEÑA_ANTERIOR_INVALIDA";
      }else{
        $resultUpdatePass= DB::update("update usuario set Contrasena ='".$NewPassword."' where ID_Usuario= ".$userID."");
        $response = "EXITO";
      }
      return $response;
    }
}
