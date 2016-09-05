<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    public $table = 'direcions';
    public $primaryKey = 'id_direcion';
   // public function usuario(){
     //   return $this->belongsTo('App\Usuario', 'id_usuario', 'id_usuario');
    //}
}
