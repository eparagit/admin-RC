<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
class PagesController extends Controller
{



      //Admin Views
      public function Admin(){
        if(Session::has('admin')){
          $data=Session::get('admin');
          if(!empty($data)){

              return view('Admin.admin')->with('admin',$data);

          }else{
               redirect('/Admin-RC/public//GetNotAllowedBlade');

          }

        }

      }
    //GoAdminU
    public function GetAdminUserView(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
            return view('Admin.adminUser');

        }else{

               redirect('/Admin-RC/public//GetNotAllowedBlade');

        }

      }
    }
    public function GetStandardIUser(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
            return view('Admin.standardIUser');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetStandardEUser(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
              return view('Admin.standardEUser');
        }else{
            return view('Login.notAllowed');
        }
      }
    }
    public function GetRegisterUserAI(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
            return view('Admin.register');

        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetProfile(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
            return view('Admin.profile');
        }else{
              return view('Login.notAllowed');
        }
      }
    }
    public function GetRol(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
            return view('Admin.rol');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetUserByRol(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
            return view('Admin.userByrol');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetSystemLogReport(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
              return view('Reports.systemLogReport');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetAdminPassChange(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
              return view('Admin.AdminPassChange');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetNoObjectAdmin(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
          return view('Admin.noObjectA');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetAdminAbout(){
      if(Session::has('admin')){
        $data=Session::get('admin');
        if(!empty($data)){
          return view('Admin.aboutA');
        }else{
              return view('Login.notAllowed');
        }

      }
    }

    //______________________
    //Internal Views
    public function Internal(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.adminI');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetTourUpload(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.tourUpload');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetTourToApprove(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.tourToApprove');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetServiceType(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.serviceType');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetTourStatus(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.tourStatus');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetEventType(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.eventType');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetTourCategory(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.tourCategory');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetNoObjectInternal(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.noObjectI');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetNewContract(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.newContract');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetNewBooking(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.newBooking');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetRemainingBooking(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.remainingBooking');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetRemainingContract(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.remainingContract');
        }else{
            return view('Login.notAllowed');
        }

      }

    }
    public function GetTheMostVisited(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.theMostVisited');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetProductInsertBlade(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.insertProduct');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetProductUpdate(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.updateProduct');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetInternalAbout(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.aboutI');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    //Layouts
    public function GetInternalLayout(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.defaultLayoutI');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetInternalHeadLayout(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.headI');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetInternalHeaderLayout(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.headerI');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetInternalFooterLayout(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.footerI');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetInternalSidebarLayout(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.sidebarI');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetMailBlade(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('sections.mail');
        }else{
              return view('Login.notAllowed');
        }

      }
    }
    public function GetContractNotification(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.contractNotification');
        }else{
            return view('Login.notAllowed');
        }

      }
    }

    //______________________
    //Reports
    public function GetBookingReport(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.bookingReport');
        }else{
            return view('Login.notAllowed');
        }

      }
    }

    public function GetExternalUsersReport(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.usersReport');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetTourReport(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.tourReport');
        }else{
            return view('Login.notAllowed');
        }

      }
    }

    public function GetContractReport(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.contractReport');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetProductReport(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.productReport');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    //______________________
    //Statistics
    public function GetStatisticsRating(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
            return view('Internal.statisticsRating');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
    public function GetStatisticsVisited(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.statisticsVisited');
        }else{
            return view('Login.notAllowed');
        }

      }
    }
	    public function GetStatisticsNvsI(){
		 if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.statisticsNacionalsvsInternationals');
        }else{
            return view('Login.notAllowed');
        }
      }
    }
    public function GetInternalPassChange(){
      if(Session::has('standard')){
        $data=Session::get('standard');
        if(!empty($data)){
          return view('Internal.InternalPassChange');
        }else{
            return view('Login.notAllowed');
        }

      }
    }

    //______________________
    //Notifications
    public function GetReminderNotifications(){
       if(Session::has('standard')){
          $data=Session::get('standard');
          if(!empty($data)){
            return view('Internal.reminderNotifications');
          }else{
              return view('Login.notAllowed');
          }
        }
    }
    //______________________
    //Login Views
    public function Login(){
      return view('Login.login');
    }
    public function GetNotAllowedBlade(){
      if(Session::has('admin')){
        $dataa=Session::get('admin');
        if(empty($dataa)){
      return view('Login.notAllowed');
    }
  }
  if(Session::has('standard')){
    $datas=Session::get('standard');
    if(empty($datas)){
  return view('Login.notAllowed');
}
}
}

      public function GetFirstPasswordChange(){
        if(Session::has('change')){
        return view('Login.firstPasswordChange');
      }
    }



    //______________________
    //if(Session::has('datos'))

}
