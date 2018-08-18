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

class ProductsController extends Controller
{

    public function insertProduct(Request $request){
          $titulo = $request->input('con_titulo_Producto');
          $descripcion = $request->input('con_descripcion_Producto');
          $sesion = Session::get('standard');
          $usuarioID = $sesion[0]['ID_Usuario'];

                   //file upload
                   $image = $request->file('image_Producto');
                   if($image){
                      $extension = $image->getClientOriginalExtension();
                      $fileName = time().'.'.$extension;
                      $path = public_path().'/images';
                      $upload = $image->move($path,$fileName);
                   }
                   DB::insert('insert into producto (usuario_ID,Nombre,Descripcion,Ruta_Imagen,Nombre_Imagen) values (?,?,?,?,?)',
                   [$usuarioID,$titulo,$descripcion,$fileName,$fileName]);
                   return view('Internal.updateProduct');
    }

    public function showProducts(){
      $result= DB::select("select u.NombreCompleto, p.Descripcion, p.Nombre, p.Ruta_Imagen, p.ID_Producto from producto p, usuario u
      where p.usuario_ID = u.ID_Usuario ");

      if(empty($result)){
          return view('sections.sectionError');
        }else{
          $array = json_decode(json_encode($result), True);
          $data = array(
             "array" => $array
          );
          return view('sections.sectionProducts')->with("array", $data);
        }
    }

    public function updateProduct(Request $request){
      $titulo = $request->input('tituloProducto_modal');
      $descripcion = $request->input('descripcionProducto_modal');
      $usuarioID = $request->input('idusuario_modal');
      $idProducto = $request->input('idProducto_modal');
              //file upload
              $image = $request->file('imageProducto_modal');
              if($image){
                 $extension = $image->getClientOriginalExtension();
                 $rutaImagen = time().'.'.$extension;
                 $path = public_path().'/images';
                 $upload = $image->move($path,$rutaImagen);
              }else{
                $rutaImagen = $request->input('imagenViejaProducto_modal'); //Si no se cambia la imagen insertamos la imagen vieja
              }
              DB::update("update producto set usuario_ID = ".$usuarioID." , Nombre = '".$titulo."', Descripcion = '".$descripcion."',
               Ruta_Imagen = '".$rutaImagen."'
              , Nombre_Imagen = '".$rutaImagen."' where ID_Producto = ".$idProducto." ");

              return view('Internal.updateProduct');
    }

    public function deleteProduct(Request $request){
      $id_t=$request['id'];
      $response = "";
      $result=DB::delete("delete from producto where ID_Producto='".$id_t."' ");
      return 1;
    }

    public function selectProductForUpdate(Request $request){
      $id_t =$request['id'];

      $result= DB::select("select u.NombreCompleto, p.Descripcion, p.Nombre, p.Ruta_Imagen, p.ID_Producto, p.usuario_ID from producto p, usuario u
      where p.usuario_ID = u.ID_Usuario  and p.ID_Producto='".$id_t."'");
      $array = json_decode(json_encode($result), True);
      $data = array(
         "array" => $array
      );

      return view('sections.sectionUpdateProduct')->with("array", $data);
    }
}
