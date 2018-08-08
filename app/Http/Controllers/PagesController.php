<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class PagesController extends Controller
{
    //Admin Views
    public function Admin(){
    //  $userName = Session::get('userName');
      if(!empty($userName)){

        return view('Admin.admin')->with('datos',$_Session);
      }else{
        return view('Admin.admin');
      }
    }
    //GoAdminU
    public function GetAdminUserView(){
      return view('Admin.adminUser');
    }
    public function GetStandardIUser(){
      return view('Admin.standardIUser');
    }
    public function GetStandardEUser(){
      return view('Admin.standardEUser');
    }
    public function GetRegisterUserAI(){
      return view('Admin.register');
    }
    public function GetProfile(){
      return view('Admin.profile');
    }
    public function GetRol(){
      return view('Admin.rol');
    }
    public function GetUserByRol(){
      return view('Admin.userByrol');
    }
    //______________________
    //Internal Views
    public function Internal(){
      return view('Internal.adminI');
    }
    public function GetTourUpload(){
      return view('Internal.tourUpload');
    }
    public function GetTourToApprove(){
      return view('Internal.tourToApprove');
    }
    public function GetServiceType(){
      return view('Internal.serviceType');
    }
    public function GetTourStatus(){
       return view('Internal.tourStatus');
    }
    public function GetEventType(){
      return view('Internal.eventType');
    }
    public function GetTourCategory(){
      return view('Internal.tourCategory');
    }
    public function GetNoObjectInternal(){
       return view('Internal.noObjectI');
    }
    public function GetNewContract(){
       return view('Internal.newContract');
    }
    public function GetNewBooking(){
       return view('Internal.newBooking');
    }
    public function GetRemainingBooking(){
       return view('Internal.remainingBooking');
    }
    public function GetRemainingContract(){
       return view('Internal.remainingContract');

    }
    public function GetTheMostVisited(){
       return view('Internal.theMostVisited');
    }
    public function GetProductInsertBlade(){
       return view('Internal.insertProduct');
    }
    public function GetProductUpdate(){
       return view('Internal.updateProduct');
    }
    //Layouts
    public function GetInternalLayout(){
       return view('Internal.defaultLayoutI');
    }
    public function GetInternalHeadLayout(){
       return view('Internal.headI');
    }
    public function GetInternalHeaderLayout(){
       return view('Internal.headerI');
    }
    public function GetInternalFooterLayout(){
       return view('Internal.footerI');
    }
    public function GetInternalSidebarLayout(){
       return view('Internal.sidebarI');
    }
    public function GetMailBlade(){
       return view('sections.mail');
    }
    //______________________
    //Reports
    public function GetTourReport(){
       return view('Reports.tourReport');
    }
    public function GetBookingReport(){
       return view('Reports.bookingReport');
    }
    public function GetHiringReport(){
       return view('Reports.hiringReport');
    }
    public function GetProductReport(){
       return view('Reports.productReport');
    }
    //______________________
    //Statistics
    public function GetStatisticsRating(){
       return view('Internal.statisticsRating');
    }
    public function GetStatisticsVisited(){
       return view('Internal.statisticsVisited');
    }
    public function GetStatisticsSeason(){
       return view('Internal.statisticsSeason');
    }
    //______________________
    //Login Views
    public function Login(){
      return view('Login.login');
    }
    //______________________


}
