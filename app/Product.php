<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    //Table Name
    public $table = 'producto';
    // Primary Key
    public $primaryKey = 'ID_Producto';
      //

    public $filltable = ['nombre','descripcion'];
}
