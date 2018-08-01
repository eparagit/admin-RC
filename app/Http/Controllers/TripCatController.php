<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;
class TripCatController extends Controller
{
    //
    public function selectTripCat(){

      $result= DB::select("select * from categoria_viaje");
            $array = json_decode(json_encode($result), True);
      return $array;

    }
    public function insertNewCategory(Request $request){
      $n_cat=$request['n_cat'];

      DB::insert('insert categoria_viaje (Descripcion) values (?)',[$n_cat]);
      return 1;

    }
    public function selectCatbyName(Request $request){

      $name = $request['name'];

      $result= DB::select("select ID_Categoria from categoria_viaje where Descripcion='".$name."'");

      $array = json_decode(json_encode($result), True);
  return $array;
    }
    public function deleteTourCategory(Request $request){
      $id_tcat=$request['id'];

      $result=DB::delete("delete from categoria_viaje where ID_Categoria='".$id_tcat."' ");
      return 1;
    }
}
