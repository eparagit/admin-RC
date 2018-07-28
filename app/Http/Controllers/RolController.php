<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

class RolController extends Controller
{
  public function selectRol(){


    $result= DB::select("select ID_Rol, Descripcion from rol where ID_Rol < '3'");
          $array = json_decode(json_encode($result), True);
return $array;

  }
  public function selectAllRol(){
    $result= DB::select("select ID_Rol,Codigo_Rol,Descripcion from rol");
          $array = json_decode(json_encode($result), True);
return $array;
  }

  public function selectRolByID(Request $request){

    $r_id = $request['rid'];
    $result= DB::select("select ID_Rol, Descripcion from rol where ID_Rol = '".$r_id."'");
          $array = json_decode(json_encode($result), True);
return $array;
  }

}
