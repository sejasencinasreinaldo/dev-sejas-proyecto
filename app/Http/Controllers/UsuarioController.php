<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use App\Perfil;
use Session;
use Auth;

class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('autenticado', ['except' => ['login', 'autenticar']]);

    }

    public function login(){

        return view("usuario.login");
    }
    public function autenticar(Request $peticion){
        $credenciales = $peticion->only(['username', 'password']);

        if(Auth::attempt($credenciales)){
            if(Auth::user()->tipo=='Administrador') {
                return redirect('/administrador/home');
            }else{
                return Auth::user()->tipo;
            }
        }else{
            return redirect('/usuario/login')->withErrors([
                'login' => 'Usuario y/o contraseña incorrectos',
            ])->withInput($peticion->only('username'));
        }
    }
    public  function logout(){

        Auth::logout();
        return redirect("/");
    }
    public function test(){
        $usuario=Usuario::all();
        $per=Perfil::find(6);
        $cont=count($usuario);
        //$id_usuario=$usuario->id_usuario;
       // $data=Perfil::where('idUsuario', 1)->first();
        //$perfil= Perfil::where('idUsuario',$id_usuario);

        return view("prueba")->with("per",$per);

        dd($cont);

    }
}

