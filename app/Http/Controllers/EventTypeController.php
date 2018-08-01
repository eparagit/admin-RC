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
    public function deleteEventType(Request $request){
      $id_et=$request['id'];

      $result=DB::delete("delete from tipo_evento where ID_Tipo_Evento='".$id_et."' ");
      return 1;
    }
}
