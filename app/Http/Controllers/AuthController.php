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
      $result= DB::select("select ID_Usuario,rol_ID,NombreCompleto,PrimerApellido,CorreoElectronico,NumeroTelefonico,NombreUsuario from usuario where NombreUsuario='".$userName."' and Contrasena='".$password."'");
      $array = json_decode(json_encode($result), True);
      $response = 0;

        if(!empty($array)){
              if($array[0]['rol_ID'] == 1){
                  $response = 1;
              }else{
                  $response = 2;
              }
            Session::put('datos', $array);

        }else{
          $response = 0;
        }
      // $_Session =Session::get('datos');
    //var_dump($_Session);
        return $response;
    }

    public function logoutS(Request $request){
      $request->session()->flush();
      return 1;
    }
}
