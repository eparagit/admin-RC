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
    public function GetNotApprovedTourToUpdate(){
      return view('Internal.notApprovedTourUpdate');
    }
    public function GetServiceType(){
      return view('Internal.serviceType');
    }
    public function GetTourStatus(){
       return view('Internal.tourStatus');
    }
    public function GetBookingContractStatus(){
       return view('Internal.bookingContractStatus');
    }
    public function GetEventType(){
      return view('Internal.eventType');
    }
    public function GetTourCategory(){
      return view('Internal.tourCategory');
    }
    public function GetNoObjectInternal(){
       return view('Internal.GoNoObjectI');
    }
    //______________________
    //Login Views
    public function Login(){
      return view('Login.login');
    }
    //______________________







    public function GoTaup(){
      return view('Internal.taup');
    }
    //Start Go tourU








}
