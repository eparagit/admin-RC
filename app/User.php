<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  //Table Name
  public $table = 'usuario';
  // Primary Key
  public $primaryKey = 'ID_Usuario';
    //
}
