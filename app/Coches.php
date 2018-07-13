<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Coches extends Model
{
  protected $softDelete = true;
  protected $table = 'coches';
  protected $guarded = array('id');
  
  public function marcas() {    
    return $this->hasOne('App\Marcas', 'id', 'marca_id');
    
  } 
}
