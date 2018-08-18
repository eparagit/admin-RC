<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
  public function selectStatisticsForRating(Request $request){

      $result= DB::select("select v.Titulo, c.Valor FROM calificacion c, viaje v where c.viaje_ID=v.ID_Viaje ");
      $array = json_decode(json_encode($result), True);
      return $array;
  }

  public function selectStatisticsNacionalvsInternational(Request $request){

      $result=DB::select("select tv.Descripcion, count('v.ID_Viaje') Cantidad from  tipo_viaje tv, viaje v
      where v.tipo_viaje_ID=tv.ID_Tipo_Viaje  GROUP BY tv.Descripcion ");
      $array = json_decode(json_encode($result), True);
      return $array;
  }

  public function selectStatisticsMostVisited(Request $request){

      $result=DB::select("select r.Cantidad_Personas,v.Titulo from reservacion r, viaje v where r.viaje_ID=v.ID_Viaje");
      $array = json_decode(json_encode($result), True);
      return $array;
  }

}
