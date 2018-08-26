<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideDownloadController extends Controller
{
    public function adminGuide(){
      $file=public_path('guides//ManualAdministrador.pdf');
      $name=basename($file);
      return response()->download($file);
    }
    public function internalGuide(){
      $file=public_path('guides//ManualUsuarioEI.pdf');
      $name=basename($file);
      return response()->download($file);
    }
}
