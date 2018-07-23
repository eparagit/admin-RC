<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Trip;
class TripController extends Controller
{

      public function insertTrip(Request $request){
          $us_id = $request['usuario_id'];
          $tv_id = $request['tipo_viaje_id'];
          $ctv_id = $request['cat_viaje_id'];
          $ev_id = $request['est_viaje_id'];
          $tit = $request['titulo'];
          $desc = $request['descripcion'];
          $req = $request['requisitos'];
          $cup = $request['cupo'];
          $cost = $request['cost'];
          $fhs = $request['fecha_hora_salida'];
          $fhr = $request['fecha_hora_regreso'];
          $publ = $request['publicacion'];
          $venc = $request['vencimiento'];
          $incl = $request['incluye'];
          $imagen = $request['imagen'];


          $result= DB::select("select * from viaje where Titulo='".$tit."'");
          $array = json_decode(json_encode($result), True);
            if(!empty($array)){
                 return 0;
            }else{
                  DB::insert('insert into viaje (usuario_ID,tipo_viaje_ID,categoria_viaje_ID,estadoViaje_ID,Titulo,Descripcion,Requisitos,Cupo,Costo,FechaHora_Salida,FechaHora_Regreso,Publicacion,Vencimiento,Incluye,Ruta_Imagen) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$us_id,$tv_id,$ctv_id,$ev_id,$tit,$desc,$req,$cup,$cost,$fhs,$fhr,$publ,$venc,$incl,$imagen]);
                  return 1;
                }

            }

      public function fileUpload(Request $request){
        $image = $request->file('image');
        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/Tours');
        $image->move($destinationPath, $input['imagename']);
      }

  }
