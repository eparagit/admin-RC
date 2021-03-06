<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

use Mail;

use Dompdf\Dompdf;

class ContractController extends Controller
{
    //
    public function selectNewContract(){

      $result= DB::select("select c.ID_Contratacion,c.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
      u.NumeroTelefonico,u.CorreoElectronico,c.estado_ID,e.Descripcion Descripcion_Est,c.tipoEvento_ID,te.Descripcion Descripcion_Te,c.tipoServicioID,ts.Descripcion Descripcion_ts
      ,c.Descripcion,c.FechaTramite,c.FechaServicio,c.Costo_Total from contratacion c, usuario u,estados e,tipo_evento te,tipo_servicio ts
      where e.Descripcion='Nuevo' and c.estado_ID=ID_Estado  and c.usuario_ID = u.ID_Usuario and c.tipoEvento_ID=te.ID_Tipo_Evento and c.tipoServicioID=ts.ID_Tipo_Servicio");

      $array = json_decode(json_encode($result), True);

      return $array;

    }
    public function selectRemainingContract(){

      $result= DB::select("select c.ID_Contratacion,c.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
      u.NumeroTelefonico,u.CorreoElectronico,c.estado_ID,e.Descripcion Descripcion_Est,c.tipoEvento_ID,te.Descripcion Descripcion_Te,c.tipoServicioID,ts.Descripcion Descripcion_ts
      ,c.Descripcion,c.FechaTramite,c.FechaServicio,c.Costo_Total from contratacion c, usuario u,estados e,tipo_evento te,tipo_servicio ts
      where e.Descripcion='Pendiente' and c.estado_ID=ID_Estado  and c.usuario_ID = u.ID_Usuario and c.tipoEvento_ID=te.ID_Tipo_Evento and c.tipoServicioID=ts.ID_Tipo_Servicio");

      $array = json_decode(json_encode($result), True);

      return $array;

    }
    public function updateIDStatus(Request $request){
      $id_cont=$request['id'];
      $id_s=$request['id_s'];

      $result=DB::update("update contratacion set estado_ID='".$id_s."' where ID_Contratacion='".$id_cont."'");

      return 1;


    }
    public function ApproveContract(Request $request){
      $id_cont=$request['id'];
      $id_s=$request['id_s'];



      $result=DB::update("update contratacion set estado_ID='".$id_s."' where ID_Contratacion='".$id_cont."'");




      return 1;
    }
    public function ProcessContract(Request $request){
      $id_cont=$request['id'];
      $id_s=$request['id_s'];

      $result=DB::update("update contratacion set estado_ID='".$id_s."' where ID_Contratacion='".$id_cont."'");

      return 1;
    }
    public function RejectContract(Request $request){
      $id_cont=$request['id'];
      $id_s=$request['id_s'];

      $result=DB::update("update contratacion set estado_ID='".$id_s."' where ID_Contratacion='".$id_cont."'");

      return 1;
    }
    public function NotifyContractApproval(Request $request){
        $id_cont=$request['id'];

      $result= DB::select("select c.ID_Contratacion,c.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
      u.NumeroTelefonico,u.CorreoElectronico,c.estado_ID,e.Descripcion Descripcion_Est,c.tipoEvento_ID,te.Descripcion Descripcion_Te,c.tipoServicioID,ts.Descripcion Descripcion_ts
      ,c.Descripcion,c.FechaTramite,c.FechaServicio,c.Costo_Total from contratacion c, usuario u,estados e,tipo_evento te,tipo_servicio ts
      where c.estado_ID=ID_Estado  and c.usuario_ID = u.ID_Usuario and c.tipoEvento_ID=te.ID_Tipo_Evento and c.tipoServicioID=ts.ID_Tipo_Servicio and ID_Contratacion='".$id_cont."'");

        $array = json_decode(json_encode($result), True);

      foreach($array as $book){
        $uname= $book['NombreCompleto'];
        $f_lname=$book['PrimerApellido'];
        $maili= $book['CorreoElectronico'];
        $service= $book['Descripcion_ts'];

      }

      $messageEmail="<p>Estimado(a):<br/>$uname $f_lname<br/>
      Le informa que la contratación por el siguiente servicio: $service ha sido aprobada<br/>
      Gracias</p>";

      $name="Ruta a la Cima";
      $email='rutaalacima@gmail.com';




      Mail::send('sections.mail',['name'=>$name, 'email' => $email, 'messageEmail' => $messageEmail],
      function($message) use ($maili){
        $message->to($maili)->subject('Aprobación de Contratación');  // debe ser este rutaalacima@gmail.com
      });
            return 1;
    }
    public function NotifyContractProcess(Request $request){
        $id_cont=$request['id'];
        $justification=$request['just'];

      $result= DB::select("select c.ID_Contratacion,c.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
      u.NumeroTelefonico,u.CorreoElectronico,c.estado_ID,e.Descripcion Descripcion_Est,c.tipoEvento_ID,te.Descripcion Descripcion_Te,c.tipoServicioID,ts.Descripcion Descripcion_ts
      ,c.Descripcion,c.FechaTramite,c.FechaServicio,c.Costo_Total from contratacion c, usuario u,estados e,tipo_evento te,tipo_servicio ts
      where c.estado_ID=ID_Estado  and c.usuario_ID = u.ID_Usuario and c.tipoEvento_ID=te.ID_Tipo_Evento and c.tipoServicioID=ts.ID_Tipo_Servicio and ID_Contratacion='".$id_cont."'");

        $array = json_decode(json_encode($result), True);

      foreach($array as $book){
        $uname= $book['NombreCompleto'];
        $f_lname=$book['PrimerApellido'];
        $maili= $book['CorreoElectronico'];
        $service= $book['Descripcion_ts'];

      }

      $messageEmail=$justification;

      $name="Ruta a la Cima";
      $email='rutaalacima@gmail.com';




      Mail::send('sections.mail',['name'=>$name, 'email' => $email, 'messageEmail' => $messageEmail],
      function($message) use ($maili){
        $message->to($maili)->subject('Contratación Pendiente');  // debe ser este rutaalacima@gmail.com
      });
      return 1;
    }
    public function NotifyContractRejected(Request $request){
        $id_cont=$request['id'];
        $justification=$request['just'];

      $result= DB::select("select c.ID_Contratacion,c.usuario_ID,u.NombreCompleto,u.PrimerApellido,u.SegundoApellido,
      u.NumeroTelefonico,u.CorreoElectronico,c.estado_ID,e.Descripcion Descripcion_Est,c.tipoEvento_ID,te.Descripcion Descripcion_Te,c.tipoServicioID,ts.Descripcion Descripcion_ts
      ,c.Descripcion,c.FechaTramite,c.FechaServicio,c.Costo_Total from contratacion c, usuario u,estados e,tipo_evento te,tipo_servicio ts
      where c.estado_ID=ID_Estado  and c.usuario_ID = u.ID_Usuario and c.tipoEvento_ID=te.ID_Tipo_Evento and c.tipoServicioID=ts.ID_Tipo_Servicio and ID_Contratacion='".$id_cont."'");

        $array = json_decode(json_encode($result), True);

      foreach($array as $book){
        $uname= $book['NombreCompleto'];
        $f_lname=$book['PrimerApellido'];
        $maili= $book['CorreoElectronico'];
        $service= $book['Descripcion_ts'];

      }

      $messageEmail=$justification;

      $name="Ruta a la Cima";
      $email='rutaalacima@gmail.com';




      Mail::send('sections.mail',['name'=>$name, 'email' => $email, 'messageEmail' => $messageEmail],
      function($message) use ($maili){
        $message->to($maili)->subject('Contratación Rechazada');  // debe ser este rutaalacima@gmail.com
      });
      return 1;
    }
    public function selectNewContractToApprove(Request $request){
      $id_c =$request['id'];

      $result= DB::select("select c.ID_Contratacion,c.Descripcion,c.FechaTramite,c.FechaServicio
      ,e.Descripcion Descripcion_ET,s.Descripcion Descripcion_S,u.NombreCompleto,u.PrimerApellido,
      u.SegundoApellido from contratacion c, usuario u, tipo_evento e, tipo_servicio s, estados es
      where es.Descripcion='Nuevo' and c.estado_ID=es.ID_Estado and
      c.usuario_ID=u.ID_Usuario and c.tipoEvento_ID=e.ID_Tipo_Evento and
      c.tipoServicioID=s.ID_Tipo_Servicio and c.ID_Contratacion='".$id_c."'");

      $array = json_decode(json_encode($result), True);
      $data = array(
         "array" => $array
      );
      return view('sections.sectionApproveNContract')->with("array", $data);
    }
    public function approvalNewContract(Request $request){
     $idContratacion = $request->input('con_id_modal');
     $servicio = $request->input('con_servicio_modal');
     $tipoEvento = $request->input('con_evento_modal');
     $fechaSolicitud = $request->input('con_fsolicitud_modal');
     $fechaEvento = $request->input('con_fevento_modal');
     $costoTotal = $request->input('con_costoT_modal');
     $nombreUsuario = $request->input('con_cliente_modal');
     $resultUsuarioID=DB::select("select usuario_ID from contratacion where ID_Contratacion = '".$idContratacion."'");
     $arrayUsuarioID = json_decode(json_encode($resultUsuarioID), True);
     $resultCorreoUsuario=DB::select("select CorreoElectronico from usuario where ID_Usuario = '".$arrayUsuarioID[0]['usuario_ID']."'");
     $resultCorreo = json_decode(json_encode($resultCorreoUsuario), True);

     Mail::send('sections.mailContractConfirmation',['servicio'=>$servicio, 'fechaEvento' => $fechaEvento, 'tipoEvento' => $tipoEvento, 'fechaSolicitud' => $fechaSolicitud, 'costoTotal' => $costoTotal, 'nombreUsuario' => $nombreUsuario],
     function($message) use ($resultCorreo){
       $message->to($resultCorreo[0]['CorreoElectronico'])->subject('Aprobación de Contratación');
     });
     DB::update("update contratacion set estado_ID = '7' where ID_Contratacion = '".$idContratacion."'");
     return view('Internal.NewContract');
   }
    public function RemainingContractCounter(){
      $result=DB::select("select count('ID_Contratacion') countContract from contratacion c, estados e where c.estado_ID=e.ID_Estado and e.Descripcion='Pendiente'");
      $array = json_decode(json_encode($result), True);
      return $array;
    }
    public function NewContractCounter(){
      $result=DB::select("select count('ID_Contratacion') countContract from contratacion c, estados e where c.estado_ID=e.ID_Estado and e.Descripcion='Nuevo'");
      $array = json_decode(json_encode($result), True);
      return $array;
    }
    public function ContractCounter(){
      $result=DB::select("select count('ID_Contratacion') countContract from contratacion c, estados e where c.estado_ID=e.ID_Estado and (e.Descripcion='Nuevo' or e.Descripcion='Pendiente')");
      $array= json_decode(json_encode($result), True);

      return $array;
    }
    public function selectContractReport(){
      $result=DB::select("select t.Descripcion,u.NombreCompleto,u.PrimerApellido,
      u.CorreoElectronico,c.FechaServicio from contratacion c, usuario u, tipo_servicio t,estados e  where
       c.usuario_ID=u.ID_Usuario and c.tipoServicioID=t.ID_Tipo_Servicio
       and c.estado_ID=e.ID_Estado and e.Descripcion='Aprobado'");
       $array= json_decode(json_encode($result), True);
       return $array;
    }
}
