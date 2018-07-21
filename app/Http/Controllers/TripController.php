<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    //
    public function insertTrip(Request $reuqest){

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
      $rut_im = $request['ruta_img'];

      if($request->hasFile('image')){
        $file=$request->file('image');
        $name=$file->getClientOrinalName().'.'.$file->getClientOrinalExtension();
        $image['filepath']=$name;
        $file->move(public_path().'/uploads',$name);
        $viaje->image=public_path().'/iploads',$name;
        $viaje->save();
      }

      DB::insert('insert into viaje (usuario_ID,tipo_viaje_ID,categoria_viaje_ID,Titulo,Descripcion,Requisitos,Cupo,Costo,FechaHora_Salida,FechaHora_Regreso,Publicacion,Vencimiento,Incluye,Ruta_Imagen) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',  [$us_id,$tv_id,$ctv_id,$ev_id,$tit,$desc,$req,$cup,$cost,$fhs,$fhr,$publ,$venc,$incl,$rut_im]);
      return 0;

    }
}
