<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{

    protected $table = 'perfils';
    public $primaryKey = 'id';
    protected  $fillable=['id','idUsuario','facebook','email','twitter','pinterset'];
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
        return $this->belongsTo('App\Usuario', 'id_usuario', 'idUsuario');
    }
}
