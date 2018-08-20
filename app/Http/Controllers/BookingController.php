<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;
use Mail;
class BookingController extends Controller
{
    //
    public function selectNewBooking(){

      $result= DB::select("select r.ID_Reservacion,r.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
      u.NumeroTelefonico,u.CorreoElectronico,r.estado_ID,e.Descripcion Descripcion_Est,r.viaje_ID,v.Titulo, v.Descripcion Descripcion_Viaje,r.Cantidad_Personas,r.FechaHora
       from reservacion r, usuario u,estados e, viaje v
      where e.Descripcion='Nuevo' and r.estado_ID=ID_Estado  and r.usuario_ID = u.ID_Usuario and r.viaje_ID=v.ID_Viaje");

      $array = json_decode(json_encode($result), True);

      return $array;

    }
    public function selectRemainingBooking(){

      $result= DB::select("select r.ID_Reservacion,r.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
      u.NumeroTelefonico,u.CorreoElectronico,r.estado_ID,e.Descripcion Descripcion_Est,r.viaje_ID,v.Titulo, v.Descripcion Descripcion_Viaje,r.Cantidad_Personas,r.FechaHora
       from reservacion r, usuario u,estados e, viaje v
      where e.Descripcion='Pendiente' and r.estado_ID=ID_Estado  and r.usuario_ID = u.ID_Usuario and r.viaje_ID=v.ID_Viaje");

      $array = json_decode(json_encode($result), True);

      return $array;

    }
    public function updateIDStatusB(Request $request){
      $id_book=$request['id'];
      $id_s=$request['id_s'];

      $result=DB::update("update reservacion set estado_ID='".$id_s."' where ID_Reservacion='".$id_book."'");

      return 1;
    }
    public function ApproveBooking(Request $request){
      $id_book=$request['id'];
      $id_s=$request['id_s'];

      $result=DB::update("update reservacion set estado_ID='".$id_s."' where ID_Reservacion='".$id_book."'");

      return 1;
    }
    public function ProcessBooking(Request $request){
      $id_book=$request['id'];
      $id_s=$request['id_s'];

      $result=DB::update("update reservacion set estado_ID='".$id_s."' where ID_Reservacion='".$id_book."'");

      return 1;
    }
    public function RejectBooking(Request $request){
      $id_book=$request['id'];
      $id_s=$request['id_s'];

      $result=DB::update("update reservacion set estado_ID='".$id_s."' where ID_Reservacion='".$id_book."'");

      return 1;
    }
    public function NotifyBookingApproval(Request $request){
        $id_book=$request['id'];

        $result= DB::select("select r.ID_Reservacion,r.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,u.NumeroTelefonico,
        u.CorreoElectronico,r.estado_ID,e.Descripcion Descripcion_Est,r.viaje_ID,v.Titulo, v.Descripcion Descripcion_Viaje,r.Cantidad_Personas,
        r.FechaHora from reservacion r, usuario u,estados e, viaje v where  r.estado_ID=ID_Estado  and
         r.usuario_ID = u.ID_Usuario and r.viaje_ID=v.ID_Viaje and ID_Reservacion='".$id_book."'");

        $array = json_decode(json_encode($result), True);

      foreach($array as $book){

        $uname= $book['NombreCompleto'];
        $f_lname=$book['PrimerApellido'];
        $maili= $book['CorreoElectronico'];
        $booking= $book['Descripcion_Viaje'];

      }

      $messageEmail="<p>Estimado(a):<br/>$uname $f_lname<br/>
      Ruta a la Cima le informa que la reservación del viaje $booking ha sido aprobada<br/>
      Gracias</p>";

      $name="Ruta a la Cima";
      $email='rutaalacima@gmail.com';


      Mail::send('sections.mail',['name'=>$name, 'email' => $email, 'messageEmail' => $messageEmail],
      function($message) use ($maili){
        $message->to($maili)->subject('Aprobación de Reservación');

    });

      return 1;
  }
    public function NotifyBookingProcess(Request $request){
        $id_book=$request['id'];
        $justification=$request['just'];

        $result= DB::select("select r.ID_Reservacion,r.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,u.NumeroTelefonico,
        u.CorreoElectronico,r.estado_ID,e.Descripcion Descripcion_Est,r.viaje_ID,v.Titulo, v.Descripcion Descripcion_Viaje,r.Cantidad_Personas,
        r.FechaHora from reservacion r, usuario u,estados e, viaje v where  r.estado_ID=ID_Estado  and
         r.usuario_ID = u.ID_Usuario and r.viaje_ID=v.ID_Viaje and ID_Reservacion='".$id_book."'");

        $array = json_decode(json_encode($result), True);

      foreach($array as $book){
        $uname= $book['NombreCompleto'];
        $f_lname=$book['PrimerApellido'];
        $maili= $book['CorreoElectronico'];
        $booking= $book['Descripcion_Viaje'];

      }

      $messageEmail=$justification;

      $name="Ruta a la Cima";
      $email='rutaalacima@gmail.com';




      Mail::send('sections.mail',['name'=>$name, 'email' => $email, 'messageEmail' => $messageEmail],
      function($message) use ($maili){
        $message->to($maili)->subject('Reservación Pendiente');
      });
      return 1;
    }
    public function NotifyBookingRejected(Request $request){
      $id_book=$request['id'];
      $justification=$request['just'];

      $result= DB::select("select r.ID_Reservacion,r.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,u.NumeroTelefonico,
      u.CorreoElectronico,r.estado_ID,e.Descripcion Descripcion_Est,r.viaje_ID,v.Titulo, v.Descripcion Descripcion_Viaje,r.Cantidad_Personas,
      r.FechaHora from reservacion r, usuario u,estados e, viaje v where  r.estado_ID=ID_Estado  and
       r.usuario_ID = u.ID_Usuario and r.viaje_ID=v.ID_Viaje and ID_Reservacion='".$id_book."'");

      $array = json_decode(json_encode($result), True);

    foreach($array as $book){
      $uname= $book['NombreCompleto'];
      $f_lname=$book['PrimerApellido'];
      $maili= $book['CorreoElectronico'];
      $booking= $book['Descripcion_Viaje'];

    }

      $messageEmail=$justification;

      $name="Ruta a la Cima";
      $email='rutaalacima@gmail.com';




      Mail::send('sections.mail',['name'=>$name, 'email' => $email, 'messageEmail' => $messageEmail],
      function($message) use ($maili){
        $message->to($maili)->subject('Reservación Rechazada');
      });
      return 1;
    }

    public function selectReportForBooking(Request $request){

        $result= DB::select("select r.ID_Reservacion, v.Titulo,v.FechaHora_Salida,v.Lugar_Salida,u.NombreCompleto,
         r.Cantidad_Personas from viaje v, usuario u, reservacion r where r.usuario_ID=u.ID_Usuario and r.viaje_ID=ID_Viaje");
         $array = json_decode(json_encode($result), True);

         return $array;
  }
  public function selectApprovedBookingByCustomer(){
    $result= DB::select("select r.ID_Reservacion, v.Titulo,u.NombreCompleto,
     r.Cantidad_Personas, e.Descripcion Estado_Descripcion from viaje v, usuario u, estados e, reservacion r where r.usuario_ID=u.ID_Usuario and r.viaje_ID=ID_Viaje and r.estado_ID=e.ID_Estado and e.Descripcion='Aprobado'");
     $array = json_decode(json_encode($result), True);

     return $array;
  }
  public function selectRemainingBookingByCustomer(){
      $result= DB::select("select r.ID_Reservacion, v.Titulo,u.NombreCompleto,
       r.Cantidad_Personas, e.Descripcion Estado_Descripcion from viaje v, usuario u, estados e, reservacion r where r.usuario_ID=u.ID_Usuario and r.viaje_ID=ID_Viaje and r.estado_ID=e.ID_Estado and e.Descripcion='Pendiente'");
       $array = json_decode(json_encode($result), True);

       return $array;
  }
public function RBookingCounter(){
  $result=DB::select("select count('ID_Reservacion') countBooking from reservacion r, estados e where r.estado_ID=e.ID_Estado and e.Descripcion='Pendiente'");
  $array = json_decode(json_encode($result), True);

  return $array;
}
public function NewBookingCounter(){
  $result=DB::select("select count('ID_Reservacion') countBooking from reservacion r, estados e where r.estado_ID=e.ID_Estado and e.Descripcion='Nuevo'");
  $array = json_decode(json_encode($result), True);
  return $array;
}
public function BookingCounter(){
  $result=DB::select("select count('ID_Reservacion') countBooking from reservacion r, estados e where r.estado_ID=e.ID_Estado and (e.Descripcion='Nuevo' or e.Descripcion='Pendiente')");
  $array = json_decode(json_encode($result), True);

  return $array;
}
public function selectBookingReport(){
  $result=DB::select("select u.NombreCompleto,u.PrimerApellido,u.CorreoElectronico,
  v.Titulo,r.Cantidad_Personas from usuario u,viaje v, reservacion r,
   estados e where r.usuario_ID=ID_Usuario and r.viaje_ID=v.ID_Viaje
   and e.Descripcion='Aprobado'");
   $array = json_decode(json_encode($result), True);
   return $array;
}
}
