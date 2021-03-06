<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;
class TourCategoryController extends Controller
{
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

  public function selectTourCategoryByID(Request $request){
    $id_tc=$request['id'];
    $result= DB::select("select * from categoria_viaje where ID_Categoria='".$id_tc."'");
          $array = json_decode(json_encode($result), True);
    return $array;

  }
  public function updateTourCategory(Request $request){
    $id_tc=$request['id'];
    $desc_tc=$request['des'];


    $result_r=DB::select("select r.ID_Reservacion from reservacion r, viaje v,
    categoria_viaje c where r.viaje_ID=ID_Viaje and v.categoria_viaje_ID='".$id_tc."'");
    $array = json_decode(json_encode($result_r), True);
      $response=0;

      if(empty($array)){
        $result=DB::update("update categoria_viaje set Descripcion='".$desc_tc."' where ID_Categoria='".$id_tc."'");

        $response=1;
      }else{
        $response=0;
      }


    return $response;
  }

}
