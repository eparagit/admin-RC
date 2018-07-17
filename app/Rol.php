<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
  //Table Name
  public $table = 'rol';
  // Primary Key
  public $primaryKey = 'ID_Rol';
    //
}
