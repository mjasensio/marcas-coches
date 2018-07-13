<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
  protected $softDelete = true;
  protected $table = 'marcas';
  protected $guarded = array('id');
    
}
