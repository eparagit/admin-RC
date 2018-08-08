<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;
class SystemLogController extends Controller
{
  public function SystemLogRegistry(Request $request){
    $user_id=$request['u_id'];
    $change=$request['chg'];

    $dateTime = date("Y/m/d h:i:s");

    DB::insert('insert into bitacora (usuario_ID,FechaHora,CambioRealizado) values (?,?,?)',[$user_id,$dateTime,$change]);

    return 1;
  }
  public function selectSystemLogReport(){
    $result= DB::select("select b.ID_Bitacora,u.NombreUsuario,u.CorreoElectronico,b.FechaHora,b.CambioRealizado from bitacora b, usuario u where b.usuario_ID=u.ID_Usuario");
          $array = json_decode(json_encode($result), True);
    return $array;
  }
}
