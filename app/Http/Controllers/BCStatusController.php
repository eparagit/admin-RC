<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

class BCStatusController extends Controller
{
    //
    public function selectBCStatus(){

      $result= DB::select("select * from estado_rc");
            $array = json_decode(json_encode($result), True);
      return $array;

    }
    public function insertNewBCSatus(Request $request){
      $n_bcs=$request['n_bcs'];

      DB::insert('insert estado_rc (Descripcion) values (?)',[$n_bcs]);
      return 1;

    }
    public function deleteBCStatus(Request $request){
      $id_rcs=$request['id'];

      $result=DB::delete("delete from estado_rc where ID_EstadoRC='".$id_rcs."' ");
      return 1;
    }
}
