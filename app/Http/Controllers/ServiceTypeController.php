<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

class ServiceTypeController extends Controller
{
    //
    public function selectServiceType(){

      $result= DB::select("select * from tipo_servicio");
            $array = json_decode(json_encode($result), True);
      return $array;

    }
    public function insertNewServiceType(Request $request){
      $n_st=$request['n_sty'];

      DB::insert('insert tipo_servicio (Descripcion) values (?)',[$n_st]);
      return 1;

    }

    public function selectServiceTypeByID(Request $request){
      $id_st=$request['id'];
      $result= DB::select("select * from tipo_servicio where ID_Tipo_Servicio='".$id_st."'");
            $array = json_decode(json_encode($result), True);
      return $array;

    }
    public function updateServiceType(Request $request){
      $id_st=$request['id'];
      $desc_st=$request['des'];



      $result_s=DB::select("select c.ID_Contratacion from contratacion c,
      tipo_servicio t where c.tipoServicioID=t.ID_Tipo_Servicio and t.ID_Tipo_Servicio='".$id_st."'");
      $array = json_decode(json_encode($result_s), True);
     $response=0;
     if(empty($array)){
       $result=DB::update("update tipo_servicio set Descripcion='".$desc_st."' where ID_Tipo_Servicio='".$id_st."'");
       $response=1;
     }else{
       $response=0;
     }

      return $response;
    }
}
