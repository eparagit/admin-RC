<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;
class EventTypeController extends Controller
{
    //
    public function selectEventType(){

      $result= DB::select("select * from tipo_evento");
            $array = json_decode(json_encode($result), True);
      return $array;

    }
    public function insertNewEventType(Request $request){
      $n_et=$request['n_ety'];

      DB::insert('insert tipo_evento (Descripcion) values (?)',[$n_et]);
      return 1;

    }

    public function selectEventTypeByID(Request $request){
      $id_et=$request['id'];
      $result= DB::select("select * from tipo_evento where ID_Tipo_Evento='".$id_et."'");
            $array = json_decode(json_encode($result), True);
      return $array;

    }
    public function updateEventType(Request $request){
      $id_et=$request['id'];
      $desc_et=$request['des'];


      $result_e=DB::select("select c.ID_Contratacion from contratacion c, tipo_evento
      t where c.tipoEvento_ID=t.ID_Tipo_Evento and t.ID_Tipo_Evento='".$id_et."' ");
      $array = json_decode(json_encode($result_e), True);
      $response=0;
      if(empty($array)){
        $result=DB::update("update tipo_evento set Descripcion='".$desc_et."' where ID_Tipo_Evento='".$id_et."'");
        $response=1;
      }else{
        $response=0;
      }
      return $response;
    }
}
