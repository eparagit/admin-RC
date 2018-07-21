<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

class TripTypeController extends Controller
{
    //
    public function selectTripType(){


      $result= DB::select("select * from tipo_viaje");
            $array = json_decode(json_encode($result), True);
  return $array;

    }
}
