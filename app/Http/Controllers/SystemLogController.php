<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;
use Session;
class SystemLogController extends Controller
{
  public function SystemLogRegistry(Request $request){
  
    $change=$request['chg'];

      if(Session::has('admin')){
        $sesion = Session::get('admin');
        $usuarioID = $sesion[0]['ID_Usuario'];

        $dateTime = date("Y/m/d h:i:s");
        $result=DB::insert('insert into bitacora (usuario_ID,FechaHora,CambioRealizado) values (?,?,?)',[$usuarioID,$dateTime,$change]);
      }
      if(Session::has('standard')){
          $sesion = Session::get('standard');
          $usuarioID = $sesion[0]['ID_Usuario'];
          $dateTime = date("Y/m/d h:i:s");
          $result=DB::insert('insert into bitacora (usuario_ID,FechaHora,CambioRealizado) values (?,?,?)',[$usuarioID,$dateTime,$change]);
      }


    $array = json_decode(json_encode($result), True);
    return $array;
  }
  public function selectSystemLogReport(){
    $result= DB::select("select b.ID_Bitacora,u.NombreUsuario,u.CorreoElectronico,b.FechaHora,b.CambioRealizado from bitacora b, usuario u where b.usuario_ID=u.ID_Usuario");
          $array = json_decode(json_encode($result), True);
    return $array;
  }
}
