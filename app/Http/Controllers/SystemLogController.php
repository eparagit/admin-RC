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
}
