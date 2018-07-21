<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Trip extends Model
{
    //
    //Table Name
    public $table = 'viajes';
    // Primary Key
    public $primaryKey = 'ID_Viaje';
      //
}
