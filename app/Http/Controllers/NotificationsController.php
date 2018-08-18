<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

use Mail;

class NotificationsController extends Controller
{
    public function selectToursNotifications(){
            $tour = "";
            $result=DB::select("select v.ID_Viaje, v.Titulo from viaje v, reservacion r where r.viaje_ID=v.ID_Viaje");
            $array = json_decode(json_encode($result), True);

            if(isset($array[1])){
              foreach($array as $item){
                $tour .= "<option value='".$item['ID_Viaje']."'>".$item['Titulo']."</option>";
              }
            }else{
                $tour = "<option value='".$array[0]['ID_Viaje']."'>".$array[0]['Titulo']."</option>";
            }
            return $tour;
          }

    public function selectProductNotifications(){
            $product = "";
            $result= DB::select("select ID_Producto, Nombre from producto");
            $array = json_decode(json_encode($result), True);
            if(isset($array[1])){
              foreach($array as $item){
                $product .= "<option value='".$item['ID_Producto']."'>".$item['Nombre']."</option>";
              }
            }else{
                $product = "<option value='".$array[0]['ID_Producto']."'>".$array[0]['Nombre']."</option>";
            }
            return $product;
          }

    public function massiveNotificationTour(Request $request){
        $titulo = $request->input('titulo_tourNotificaciones');
        $descripcion = $request->input('descripcion_tourNotificaciones');
        $idViaje = $request->input('tour_Notificaciones');
        $result=DB::select("select u.CorreoElectronico from usuario u, reservacion r,viaje v where r.viaje_ID=v.ID_Viaje and r.usuario_ID=u.ID_Usuario and r.viaje_ID='".$idViaje."' ");
        $array = json_decode(json_encode($result), True);
      //  var_dump($array);die;
        if(isset($array[1])){
          foreach($array as $item){
            Mail::send('sections.mailNotifications',['name'=>$titulo, 'messageEmail' => $descripcion],
                  function($message) use ($item){
                    $message->to($item['CorreoElectronico'])->subject('Información');  // debe ser este rutaalacima@gmail.com
                  });
          }
        }else{
          Mail::send('sections.mailNotifications',['name'=>$titulo, 'messageEmail' => $descripcion],
                function($message) use ($array){
                  $message->to($array[0]['CorreoElectronico'])->subject('Información');  // debe ser este rutaalacima@gmail.com
                });
        }


        return view('Internal.reminderNotifications');
    }

    public function massiveNotificationProducto(Request $request){
        $titulo = $request->input('titulo_productoNotificaciones');
        $descripcion = $request->input('descripcion_productoNotificaciones');
        $idProducto = $request->input('producto_Notificaciones');

        $result=DB::select("select CorreoElectronico from usuario where ID_Usuario = 3 ");
        $array = json_decode(json_encode($result), True);
      //  var_dump($array);die;
        if(isset($array[1])){
          foreach($array as $item){
            Mail::send('sections.mailNotifications',['name'=>$titulo, 'messageEmail' => $descripcion],
                  function($message) use ($item){
                    $message->to($item['CorreoElectronico'])->subject('Información');  // debe ser este rutaalacima@gmail.com
                  });
          }
        }else{
          Mail::send('sections.mailNotifications',['name'=>$titulo, 'messageEmail' => $descripcion],
                function($message) use ($array){
                  $message->to($array[0]['CorreoElectronico'])->subject('Información');  // debe ser este rutaalacima@gmail.com
                });
        }

        return view('Internal.reminderNotifications');
    }


}
