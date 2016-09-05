<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Storage;
use App\Http\Requests;
class Usuario extends User
{
    public $table = 'usuarios';
    public $primaryKey = 'id_usuario';
    protected  $fillable=['nombre','ape_pat','ape_mat','fecha_nacimiento','username','password','tipo'];

public function perfil(){

    return $this->hasMany('App\Perfil', 'idUsuario', 'id_usuario');
}

    public function setPasswordAttribute($valor){
        if($valor !== ''){
            $this->attributes['password'] = Hash::make($valor);
        }
    }



}
