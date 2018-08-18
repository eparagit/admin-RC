<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Trip;

use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Storage;

use Session;

class TourController extends Controller
{

  public function insertTour(Request $request){
         $titulo = $request->input('con_titulo');
         $lugarSalida = $request->input('con_lsalida');
         $lugarDestino = $request->input('con_destino');
         $descripcion = $request->input('con_descripcion');
         $tipoViaje = $request->input('tviaje');
         $categoriaViaje = $request->input('cviaje');
         $requisitos = $request->input('con_requisitos');
         $incluye = $request->input('con_incluye');
         $cupo = $request->input('con_cupo');
         $costo = $request->input('con_costo');
         $fechaSalida = $request->input('con_dtfhs');
         $fechaRegreso = $request->input('con_dtfhr');
         $fechaVencimiento = $request->input('con_dtfhv');
         $usuarioID = "";
         $rutaImagen = "";
         $sesion = Session::get('standard');
         $usuarioID = $sesion[0]['ID_Usuario'];
         $estado = 1;
         $fecha_publicacion = date("Y/m/d");
         $fechaSalida =date('Y-m-d h:m:s', strtotime(str_replace('/','-',$fechaSalida)));
         $fechaRegreso =date('Y-m-d h:m:s', strtotime(str_replace('/','-',$fechaRegreso)));
         $fechaVencimiento = date('Y-m-d h:m:s', strtotime(str_replace('/','-',$fechaVencimiento)));

                  //file upload
                  $image = $request->file('image');
                  if($image){
                     $extension = $image->getClientOriginalExtension();
                     $fileName = time().'.'.$extension;
                     $path = public_path().'/images';
                     $upload = $image->move($path,$fileName);
                  }
                  DB::insert('insert into viaje (usuario_ID,tipo_viaje_ID,categoria_viaje_ID,
                  Titulo,Descripcion,Requisitos,Cupo,Costo,FechaHora_Salida,
                  FechaHora_Regreso,Vencimiento,Incluye,Ruta_Imagen,Imagen_Name,Lugar_Salida,Destino,fecha_Publicacion,
                  estadoViaje_ID) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                  [$usuarioID,$tipoViaje,$categoriaViaje,$titulo,$descripcion,$requisitos,$cupo,$costo,$fechaSalida,$fechaRegreso,
                  $fechaVencimiento,$incluye,$fileName,$fileName,$lugarSalida,$lugarDestino,$fecha_publicacion,$estado]);
                  return view('Internal.tourToApprove');


  }

  public function selectNewTours(){

    $result= DB::select("select v.ID_Viaje,v.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.NombreUsuario,v.tipo_viaje_ID,t.Descripcion TV_Descripcion,
                          v.categoria_viaje_ID,c.Descripcion CV_Descripcion,v.Titulo,v.Descripcion V_Descripcion,v.Requisitos,v.Cupo,
                          v.Costo,v.FechaHora_Salida,v.FechaHora_Regreso,v.fecha_Publicacion,v.Vencimiento,v.Lugar_Salida,v.Destino,v.Incluye,v.Ruta_Imagen,v.Imagen_Name from viaje v,
                            usuario u,tipo_viaje t,categoria_viaje c  where v.estadoViaje_ID=1  and v.usuario_ID = u.ID_Usuario and
                            v.tipo_viaje_ID=t.ID_Tipo_Viaje and v.categoria_viaje_ID=c.ID_Categoria");

    if(empty($result)){
        return view('sections.sectionError');
      }else{
        $array = json_decode(json_encode($result), True);
        $data = array(
           "array" => $array
        );

        return view('sections.sectionTours')->with("array", $data);
      }


  }

  public function updateTour(Request $request){
    $idTour = $request->input('idtour_modal');
    $titulo = $request->input('con_titulo_modal');
    $lugarSalida = $request->input('con_lsalida_modal');
    $lugarDestino = $request->input('con_destino_modal');
    $descripcion = $request->input('con_descripcion_modal');
    $tipoViaje = $request->input('tviaje_modal');
    $categoriaViaje = $request->input('cviaje_modal');
    $requisitos = $request->input('con_requisitos_modal');
    $incluye = $request->input('con_incluye_modal');
    $cupo = $request->input('con_cupo_modal');
    $costo = $request->input('con_costo_modal');
    $fechaSalida = $request->input('con_dtfhs_modal');
    $fechaRegreso = $request->input('con_dtfhr_modal');
    $fechaVencimiento = $request->input('con_dtfhv_modal');
    $usuarioID = $request->input('idusuarioTour_modal');
    $rutaImagen = "";
    $estado = 1;
    $fecha_publicacion = date("Y/m/d");
    $fechaSalida =date('Y-m-d h:m:s', strtotime(str_replace('/','-',$fechaSalida)));
    $fechaRegreso =date('Y-m-d h:m:s', strtotime(str_replace('/','-',$fechaRegreso)));
    $fechaVencimiento = date('Y-m-d h:m:s', strtotime(str_replace('/','-',$fechaVencimiento)));
            //file upload
            $image = $request->file('image_modal');
            if($image){
               $extension = $image->getClientOriginalExtension();
               $rutaImagen = time().'.'.$extension;
               $path = public_path().'/images';
               $upload = $image->move($path,$rutaImagen);
            }else{
              $rutaImagen = $request->input('imagenVieja_modal'); //Si no se cambia la imagen insertamos la imagen vieja
            }
            DB::update("update viaje set usuario_ID = ".$usuarioID." , tipo_viaje_ID = ".$tipoViaje.", categoria_viaje_ID = ".$categoriaViaje.", Titulo = '".$titulo."', Descripcion = '".$descripcion."'
            , Requisitos = '".$requisitos."', Cupo = ".$cupo.", Costo = ".$costo.", FechaHora_Salida = '".$fechaSalida."'
            , FechaHora_Regreso = '".$fechaRegreso."', Vencimiento = '".$fechaVencimiento."', Incluye = '".$incluye."', Ruta_Imagen = '".$rutaImagen."'
            , Imagen_Name = '".$rutaImagen."', Lugar_Salida = '".$lugarSalida."', Destino = '".$lugarDestino."', fecha_Publicacion = '".$fecha_publicacion."', estadoViaje_ID = ".$estado." where ID_Viaje = ".$idTour." ");

            return view('Internal.tourToApprove');

  }

  public function ApproveTour(Request $request){
    $id_t=$request['id'];
    $estadoAprobado = 3;
    $result=DB::update("update viaje set estadoViaje_ID='".$estadoAprobado."' where ID_Viaje='".$id_t."'");

    return 1;
  }

  public function deleteTour(Request $request){
      $id_t=$request['id'];
      $response = "";
      $result=DB::delete("delete from viaje where ID_Viaje='".$id_t."' ");
      return 1;
  }

  public function selectTourForUpdate(Request $request){
    $id_t =$request['id'];

    $result= DB::select("select v.ID_Viaje,v.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.NombreUsuario,v.tipo_viaje_ID,t.ID_Tipo_Viaje,t.Descripcion TV_Descripcion,
                          v.categoria_viaje_ID,c.ID_Categoria,c.Descripcion CV_Descripcion,v.Titulo,v.Descripcion V_Descripcion,v.Requisitos,v.Cupo,
                          v.Costo,v.FechaHora_Salida,v.FechaHora_Regreso,v.fecha_Publicacion,v.Vencimiento,v.Lugar_Salida,v.Destino,v.Incluye,v.Ruta_Imagen,v.Imagen_Name from viaje v,
                            usuario u,tipo_viaje t,categoria_viaje c  where v.estadoViaje_ID='1'  and v.usuario_ID = u.ID_Usuario and
                            v.tipo_viaje_ID=t.ID_Tipo_Viaje and v.categoria_viaje_ID=c.ID_Categoria and v.ID_Viaje='".$id_t."'");
    $array = json_decode(json_encode($result), True);
    $data = array(
       "array" => $array
    );
    return view('sections.sectionUpdateTour')->with("array", $data);
  }
  public function rejectTour(Request $request){
    $id_tour=$request['id'];
    $id_st=$request['idst'];

    $result=DB::update("update viaje set estadoViaje_ID='".$id_st."' where ID_Viaje='".$id_tour."'");
    return 1;
  }
  public function RemainingTourCounter(){
    $result=DB::select("select count('ID_Viaje') tourCounter from viaje v, estado_viaje ev where v.estadoViaje_ID=ev.ID_Estado_Viaje and ev.Descripcion='Pendiente'");
    $array = json_decode(json_encode($result), True);
    return $array;
  }

}
