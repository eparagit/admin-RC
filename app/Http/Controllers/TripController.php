<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Trip;

use Illuminate\Queue\SerializesModels;

use Session;
class TripController extends Controller
{

      public function insertTrip(Request $request){
          $us_id = $request['usuario_id'];
          //$tv_id = $request['tipo_viaje_id'];
        //  $ctv_id = $request['cat_viaje_id'];
          $ev_id = $request['est_viaje_id'];
        //  $tit = $request['titulo'];
        //  $desc = $request['descripcion'];
        //  $req = $request['requisitos'];
        //  $cup = $request['cupo'];
        //  $cost = $request['cost'];
          //$fhs =date('Y/m/d h:i:s',($request('fecha_hora_salida')));

        //  $fhs = $request['fecha_hora_salida'];
        date_default_timezone_set('UTC');
          $date=$request['fecha_hora_salida'];
          	$fhs =date('Y-m-d h:m:s', strtotime(str_replace('/','-',$date)));

          //  var_dump($fhs);

          $fhr = $request['fecha_hora_regreso'];
          $publ = $request['publicacion'];
         $venc = $request['vencimiento'];
      //    $incl = $request['incluye'];
      //    $imagen = $request['imagen'];

      $title="";
      $desc="";
      $t_type="";
      $t_cat="";
      $req="";
      $incl="";
      $quot="";
      $cost="";
      $i_path="";



           $data = Session::get('viaje');
            $title=$data['Titulo'];
            $desc=$data['Descripcion'];
            $t_type=$data['TipoViaje'];
            $t_cat=$data['CategoriaViaje'];
            $req=$data['Requisitos'];
            $incl=$data['Incluye'];
            $quot=$data['Cupo'];
            $cost=$data['Costo'];
            $i_path=$data['ImgPath'];






          $result= DB::select("select * from viaje where Titulo='".$title."'");
          $array = json_decode(json_encode($result), True);
            if(!empty($array)){
                 return 0;
            }else{
              DB::insert('insert into viaje (usuario_ID,tipo_viaje_ID,categoria_viaje_ID,estadoViaje_ID,Titulo,Descripcion,Requisitos,Cupo,Costo,FechaHora_Salida,FechaHora_Regreso,Publicacion,Vencimiento,Incluye,Ruta_Imagen) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$us_id,$t_type,$t_cat,$ev_id,$title,$desc,$req,$quot,$cost,$fhs,$fhr,$publ,$venc,$incl,$i_path]);
                  //DB::insert('insert into viaje (usuario_ID,tipo_viaje_ID,categoria_viaje_ID,estadoViaje_ID,Titulo,Descripcion,Requisitos,Cupo,Costo,FechaHora_Salida,FechaHora_Regreso,Publicacion,Vencimiento,Incluye,Ruta_Imagen) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$us_id,$tv_id,$ctv_id,$ev_id,$tit,$desc,$req,$cup,$cost,$fhs,$fhr,$publ,$venc,$incl,$imagen]);
                  return 1;
                }

            }

      public function fileUpload(Request $request){

        $image = $request->file('image');
        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/Tours');
        $image->move($destinationPath, $input['imagename']);

        $image_path=$destinationPath.$input['imagename'];

     //$tv =Input::get('s_tviaje');
     //var_dump($tv);die;

       $viaje = ["Titulo"=>Input::get('con_titulo'),"Descripcion"=>Input::get('con_descripcion'),
                  "TipoViaje"=>Input::get('s_tviaje'),"CategoriaViaje"=>Input::get('s_cviaje'),
                  "Requisitos"=>Input::get('con_requisitos'),"Incluye"=>Input::get('con_incluye'),
                  "Cupo"=>Input::get('con_cupo'),"Costo"=>Input::get('con_costo'),"ImgPath"=>$image_path];
    //var_dump($viaje); die;
        Session::put('viaje',$viaje);

        return view('Internal.taup');
      }
      public function selectTuorToApr(){

        $result= DB::select("select v.ID_Viaje,v.usuario_ID,u.NombreCompleto,u.PrimerApellido,v.tipo_viaje_ID,t.Descripcion TV_Descripcion,
                              v.categoria_viaje_ID,c.Descripcion CV_Descripcion,v.Titulo,v.Descripcion V_Descripcion,v.Requisitos,v.Cupo,
                              v.Costo,v.FechaHora_Salida,v.FechaHora_Regreso,v.Publicacion,v.Vencimiento,v.Incluye,v.Ruta_Imagen from viaje v,
                                usuario u,tipo_viaje t,categoria_viaje c  where v.estadoViaje_ID=1  and v.usuario_ID = u.ID_Usuario and
                                v.tipo_viaje_ID=t.ID_Tipo_Viaje and v.categoria_viaje_ID=c.ID_Categoria");
        $array = json_decode(json_encode($result), True);


      }

  }
