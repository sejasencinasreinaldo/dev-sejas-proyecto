<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;
use App\Http\Requests;

class AdministradorController extends Controller
{
    //
    public function __construct(){
        $this->middleware('autenticado', ['except' => ['login', 'autenticar']]);

    }
    public function home(){

        return view("usuario.administrador.home");
    }
    public function crear_usuario(){

        return view("usuario.administrador.form_nuevo_usuario");
    }
    public  function alamacenar_usuario(Requests\Form_nuevo_usuario $peticion){
        //Usuario::create($peticion->all());
        $usuario = new Usuario;
        $usuario->nombre = $peticion->nombre;
        $usuario->ape_pat = $peticion->ape_pat;
        $usuario->ape_mat=$peticion->ape_mat;
        $usuario->username=$peticion->username;
        $usuario->password=$peticion->password;
        $usuario->tipo=$peticion->tipo;
        $usuario->perfil="imagenes/perfil/user.png";
        $resultado=$usuario->save();
        if($resultado){

            return view("usuario.administrador.form_nuevo_usuario")->with("msj","Usuario Registrado Correctamente");
        }

    }
    public function ver_usuarios(){
        $lista= Usuario::all();
        $parametros=['usuarios'=>$lista];
        return view("usuario.administrador.ver_usuarios",$parametros);
    }
    public  function editar_usuario($id){
        $usuario=Usuario::find($id);
        $contador=count($usuario);
        if($contador>0){
            return view("usuario.administrador.form_editar_usuario")->with("usuario",$usuario);
        }
        else
        {
            return view("mensajes.msj_rechazado")->with("msj","el usuario con ese id no existe o fue borrado");
        }
    }
    public function actualizar_usuario(Request $peticion){
        $data=$peticion->all();
        $id_usuario=$data["id_usuario"];
        $usuario=Usuario::find($id_usuario);
        $usuario->nombre=$data["nombre"];
        $usuario->ape_pat=$data["ape_pat"];
        $usuario->ape_mat=$data["ape_mat"];
        $usuario->username=$data["username"];
        $usuario->tipo=$data["tipo"];
        $resultado=$usuario->save();
        if($resultado){
            return view("mensajes.msj_correcto")->with("msj","Datos actualizados Correctamente");
        }
        else
        {
            return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");
        }
    }
    public function cambiar_password(Request $request){

        $id=$request->input("id_usuario_password");
        $usuario=Usuario::find($id);
        $password=$request->input("password");
        $repetir_pass=$request->input("rpassword");
         $usuario->password=$password;
        if($password==$repetir_pass and $password!=""){

            $r=$usuario->save();
            if($r){
                return view("mensajes.msj_correcto")->with("msj","password actualizado");
            }
            else
            {
                return view("mensajes.msj_rechazado")->with("msj","Error al actualizar el password");
            }
        }else{

            return view("mensajes.msj_rechazado")->with("msj","Error al actualizar el campo password y el campo confirmar password deben ser iguales gracias intente de nuevo");
        }



    }
    public function subir_imagen_usuario(Request $request){

        $id=$request->input('id_usuario_foto');
        $archivo = $request->file('archivo');
        $input  = array('image' => $archivo) ;
        $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:2000');
        $validacion=Validator::make($input,$reglas);
        if($validacion->fails()){
            return view("mensajes.msj_rechazado")->with("msj","El archivo no es una imagen valida");

        }else{

            $nombre_original=$archivo->getClientOriginalName();
            $extension=$archivo->getClientOriginalExtension();
            $nuevo_nombre="userimagen-".$id.".".$extension;

            $r1=Storage::disk('perfiles')->put($nuevo_nombre,  \File::get($archivo) );
            $rutadelaimagen="perfiles/".$nuevo_nombre;

            if ($r1){

                $usuario=Usuario::find($id);
                $usuario->perfil=$rutadelaimagen;
                $r2=$usuario->save();
                return view("mensajes.msj_correcto")->with("msj","Imagen agregada correctamente");
            }
            else {  }



     }
    }
    public  function eliminar_usuario($id){

        $usuario=Usuario::find($id);
      $resutado = $usuario->delete();
        if($resutado){ }
    }
    public function ver_usuario($id){
          $usuario=Usuario::find($id);
        $contador=count($usuario);
        if($contador>0){
            return view("usuario.administrador.perfil_usuario")->with("usuario",$usuario);
        }
        else
        {
            return view("mensajes.msj_rechazado")->with("msj","el usuario con ese id no existe o fue borrado");
        }
    }
}
