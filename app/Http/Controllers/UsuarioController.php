<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
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
            if(Auth::user()->tipo=='administrador') {
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
}

