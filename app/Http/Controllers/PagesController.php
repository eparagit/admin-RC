<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class PagesController extends Controller
{
    //
    public function Admin(){
    //  $userName = Session::get('userName');
      if(!empty($userName)){

        return view('Admin.admin')->with('datos',$_Session);
      }else{
        return view('Admin.admin');
      }
    }
    public function Internal(){
      return view('Internal.adminI');
    }
    public function GoReg(){
      return view('Admin.register');
    }
    public function GoRol(){
      return view('Admin.rol');
    }
    public function GoAdminU(){
      return view('Admin.adminU');
    }
    public function GoSIU(){
      return view('Admin.siuser');
    }
    public function GoSEU(){
      return view('Admin.seuser');
    }
    public function GoUserbyr(){
      return view('Admin.userByrol');
    }

    public function GoProfile(){
      return view('Admin.profile');
    }
    public function GoTaup(){
      return view('Internal.taup');
    }
    //Start Go tourU
    public function GoTourU(){
      return view('Internal.tourU');
    }
    //End Go tourU
    //Start Go tourAprl
    public function GoTourAprl(){
      return view('Internal.tourAprl');
    }
    public function GoUpdateTwAp(){
      return view('Internal.updateTw');
    }
    //End Go tourAprl
    //Start Go tourAprl
    public function GoTourAprlid(){
      return view('Internal.tourAprl-id');
    }
    //End Go tourAprl
   public function Product(){
      return view('Product.index');
    }
    public function GoNProduct(){
       return view('Product.nproduct');
     }
    public function index(){
      return view('Product.index');
    }
    public function readProducts(){
      $products = Product::select('ID_Producto','nombre','descripcion')
      ->get();
      return response($products);
    }
    public function Login(){
      return view('Login.login');
    }
    public function GoProductUpload(){
       return view('Product.productUpload');
     }



}
