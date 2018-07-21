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
}
