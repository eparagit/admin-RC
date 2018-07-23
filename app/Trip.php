<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
class Trip extends Model
{
    //
    //Table Name
    public $table = 'viajes';
    // Primary Key
    public $primaryKey = 'ID_Viaje';
      //
      public function publish(Post $post){
        $this->post()->save($post);
      }
}
