<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

class TourStatusController extends Controller
{
    //
    public function selectTourStatus(){

      $result= DB::select("select * from estado_viaje");
            $array = json_decode(json_encode($result), True);
      return $array;

    }
    public function insertNewTourStatus(Request $request){
      $n_ts=$request['n_ts'];

      DB::insert('insert estado_viaje (Descripcion) values (?)',[$n_ts]);
      return 1;

    }
    public function deleteTourStatus(Request $request){
      $id_ts=$request['id'];

      $result=DB::delete("delete from estado_viaje where ID_Estado_Viaje='".$id_ts."' ");
      return 1;
    }
    public function selectTourStatusByID(Request $request){
      $id_ts=$request['id'];
      $result= DB::select("select * from estado_viaje where ID_Estado_Viaje='".$id_ts."'");
            $array = json_decode(json_encode($result), True);
      return $array;

    }
    public function updateTourStatus(Request $request){
      $id_ts=$request['id'];
      $desc_ts=$request['des'];

      $result=DB::update("update estado_viaje set Descripcion='".$desc_ts."' where ID_Estado_Viaje='".$id_ts."'");

      return 1;
    }
}
