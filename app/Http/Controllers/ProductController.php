<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;
use App\Product;
class ProductController extends Controller
{

  public function index(){
    $products = Product::select('ID_Producto','nombre','descripcion');
    ->get();
    return view('Product.index', compact('product'));
  }

  public function selectProduct(){
    $result= DB::select("select ID_Product,usuario_ID,Nombre,Descripcion from producto");
          $array = json_decode(json_encode($result), True);
return $array;
  }
 public function AddProduct(Request $request){

     $usid = $request['userid'];
     $pna = $request['prname'];
     $pde = $request['pdescr'];

         DB::insert('insert into producto (usuario_ID,Nombre,Descripcion values (?,?,?)',  [$usid,$pna,$pde]);
         return 0;

   }
public function imagesUpload(){
  return view('productUpload');
}
public function imagesUploadPost(Request $request){
  request()-validate([
    'uploadFile'=>'required',
  ]);
  foreach($request->file('uploadFile')as $key=>$value){
    $imageName=time().$key.'.'.$value->getClientOriginalExtension();
    $value->move(public_path('images'),$imageName);
  }
  return response()->json(['success'=>'Images Uploaded Successfully.']);
}
 }
