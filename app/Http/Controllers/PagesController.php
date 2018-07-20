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
      return view('Internal.taup');
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
    public function GoProfile(){
      return view('Admin.profile');
    }
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



}