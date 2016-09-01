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
    protected  $fillable=['nombre','ape_pat','ape_mat','username','password','tipo','perfil'];
    public function setPasswordAttribute($valor){
        if($valor !== ''){
            $this->attributes['password'] = Hash::make($valor);
        }
    }
    /*public function setPerfilAttribute($archivo)
    {
        if ($archivo !== null) {

            if ($archivo instanceof UploadedFile) {
                $rand = rand(10000, 99999);
                $nombre = "$rand-{$archivo->getClientOriginalName()}";

                $archivo->move(storage_path('app/usuarios'), $nombre);
                if (isset($this->attributes['usuarios']))
                    $this->eliminarArchivo();
                $this->attributes['usuarios'] = "usuarios/$nombre";
            } else {
                $this->attributes['usuarios'] = $archivo;
            }
        }else{


        }
    }*/
    public function eliminarArchivo()
    {
        Storage::delete($this->attributes['usuarios']);
    }


}
