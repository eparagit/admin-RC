<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
class Tour extends Model
{
  public $table = 'viajes';
  // Primary Key
  public $primaryKey = 'ID_Viaje';
  public function publish(Post $post){
    $this->post()->save($post);
  }
}
