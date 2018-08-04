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
class TourController extends Controller
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
      $date_fhs=$request['fecha_hora_salida'];
      $date_fhr = $request['fecha_hora_regreso'];
      $date_publ= $request['publicacion'];
      $date_venc = $request['vencimiento'];

        $fhs =date('Y-m-d h:m:s', strtotime(str_replace('/','-',$date_fhs)));
        $fhr =date('Y-m-d h:m:s', strtotime(str_replace('/','-',$date_fhr)));
        $publ = date('Y-m-d h:m:s', strtotime(str_replace('/','-',$date_publ)));
        $venc = date('Y-m-d h:m:s', strtotime(str_replace('/','-',$date_venc)));
      //  var_dump($fhs);




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
        $i_name=$data['Img_Name'];
        $l_salida=$data['L_Salida'];
        $destino=$data['Destino'];







      $result= DB::select("select * from viaje where Titulo='".$title."'");
      $array = json_decode(json_encode($result), True);
        if(!empty($array)){
             return 0;
        }else{
          DB::insert('insert into viaje (usuario_ID,tipo_viaje_ID,categoria_viaje_ID,estadoViaje_ID,Titulo,Descripcion,Requisitos,Cupo,Costo,FechaHora_Salida,FechaHora_Regreso,Publicacion,Vencimiento,Lugar_Salida,Destino,Incluye,Ruta_Imagen,Imagen_Name) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$us_id,$t_type,$t_cat,$ev_id,$title,$desc,$req,$quot,$cost,$fhs,$fhr,$publ,$venc,$l_salida,$destino,$incl,$i_path,$i_name]);
              //DB::insert('insert into viaje (usuario_ID,tipo_viaje_ID,categoria_viaje_ID,estadoViaje_ID,Titulo,Descripcion,Requisitos,Cupo,Costo,FechaHora_Salida,FechaHora_Regreso,Publicacion,Vencimiento,Incluye,Ruta_Imagen) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$us_id,$tv_id,$ctv_id,$ev_id,$tit,$desc,$req,$cup,$cost,$fhs,$fhr,$publ,$venc,$incl,$imagen]);
              return 1;
            }

        }

  public function fileUpload(Request $request){



    $path=$request->file('image')->store('Tours','public');

  /* $image = $request->file('image');
    $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
    $destinationPath = public_path('Tours');
    var_dump($path);

    $image->move($destinationPath, $input['imagename']);


    $image_path=$destinationPath.'\\'.$input['imagename'];
    $image_name=$input['imagename'];*/


   $viaje = ["Titulo"=>Input::get('con_titulo'),"Descripcion"=>Input::get('con_descripcion'),
              "TipoViaje"=>Input::get('s_tviaje'),"CategoriaViaje"=>Input::get('s_cviaje'),
              "Requisitos"=>Input::get('con_requisitos'),"Incluye"=>Input::get('con_incluye'),
              "Cupo"=>Input::get('con_cupo'),"Costo"=>Input::get('con_costo'),"ImgPath"=> $path,"Img_Name"=> $path,"L_Salida"=>Input::get('con_lsalida'),"Destino"=>Input::get('con_destino')];
//var_dump($viaje); die;
    Session::put('viaje',$viaje);

    return view('Internal.taup');
  }
  public function selectTuorToApr(){

    $result= DB::select("select v.ID_Viaje,v.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.NombreUsuario,v.tipo_viaje_ID,t.Descripcion TV_Descripcion,
                          v.categoria_viaje_ID,c.Descripcion CV_Descripcion,v.Titulo,v.Descripcion V_Descripcion,v.Requisitos,v.Cupo,
                          v.Costo,v.FechaHora_Salida,v.FechaHora_Regreso,v.Publicacion,v.Vencimiento,v.Lugar_Salida,v.Destino,v.Incluye,v.Ruta_Imagen,v.Imagen_Name from viaje v,
                            usuario u,tipo_viaje t,categoria_viaje c  where v.estadoViaje_ID=1  and v.usuario_ID = u.ID_Usuario and
                            v.tipo_viaje_ID=t.ID_Tipo_Viaje and v.categoria_viaje_ID=c.ID_Categoria");

    $array = json_decode(json_encode($result), True);

    return $array;

  }
  public function ApproveTour(Request $request){
    $id_t=$request['id'];
    $id_est_t=$request['idE'];

    $result=DB::update("update viaje set estadoViaje_ID='".$id_est_t."' where ID_Viaje='".$id_t."'");

    return 1;

  }
  public function deleteTour(Request $request){
      $id_t=$request['id'];

      $result=DB::delete("delete from viaje where ID_Viaje='".$id_t."' ");
      return 1;
  }
  public function selectTuorToUpdateApp(Request $request){
    $id_t =$request['id'];

    $result= DB::select("select v.ID_Viaje,v.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.NombreUsuario,v.tipo_viaje_ID,t.ID_Tipo_Viaje,t.Descripcion TV_Descripcion,
                          v.categoria_viaje_ID,c.ID_Categoria,c.Descripcion CV_Descripcion,v.Titulo,v.Descripcion V_Descripcion,v.Requisitos,v.Cupo,
                          v.Costo,v.FechaHora_Salida,v.FechaHora_Regreso,v.Publicacion,v.Vencimiento,v.Lugar_Salida,v.Destino,v.Incluye,v.Ruta_Imagen,v.Imagen_Name from viaje v,
                            usuario u,tipo_viaje t,categoria_viaje c  where v.estadoViaje_ID='1'  and v.usuario_ID = u.ID_Usuario and
                            v.tipo_viaje_ID=t.ID_Tipo_Viaje and v.categoria_viaje_ID=c.ID_Categoria and v.ID_Viaje='".$id_t."'");

    $array = json_decode(json_encode($result), True);

    Session::put('act_viaje',$array);
    return 1;

  }

 public function updateFormsNoimgdate(Request $request){

   $id_tv = Input::get('tviaje'); //$request['tviaje'];
   $id_ct = Input::get('cviaje'); //$request['cviaje'];
   $tit = Input::get('con_titulo'); //$request['con_titulo'];
   $desc = Input::get('con_descripcion'); //$request['con_descripcion'];
   $req = Input::get('con_requisitos'); //$request['con_requisitos'];
   $qu = Input::get('con_cupo'); //$request['con_cupo'];
   $co = Input::get('con_costo'); //$request['con_costo'];
   $lsal = Input::get('con_lsalida'); //$request['con_lsalida'];
   $dest = Input::get('con_destino'); //$request['con_destino'];
   $incl = Input::get('con_incluye'); //$request['con_incluye'];
   $id_viaj = Input::get('con_id_via'); //$request['con_id_via'];
   $viaje_id=Session::get('act_viaje');
   $id_v=$viaje_id[0]['ID_Viaje'];

  var_dump("update viaje set tipo_viaje_ID='".$id_tv."',categoria_viaje_ID='".$id_ct."',Titulo='".$tit."',Descripcion='".$desc."',Requisitos='".$req."',Cupo='".$qu."',
  Costo='".$co."',Lugar_Salida='".$lsal."',Destino='".$dest."',Incluye='".$incl."' where ID_Viaje='".$id_v."'"); die;

    $result=DB::update("update viaje set tipo_viaje_ID='".$id_tv."',categoria_viaje_ID='".$id_ct."',Titulo='".$tit."',Descripcion='".$desc."',Requisitos='".$req."',Cupo='".$qu."',
    Costo='".$co."',Lugar_Salida='".$lsal."',Destino='".$dest."',Incluye='".$incl."' where ID_Viaje='".$id_v."'");

      $array = json_decode(json_encode($result), True);

    return 1;

  }

}
