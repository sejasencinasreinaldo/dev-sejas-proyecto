<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre'=>'Reinaldo',
            'ape_pat'=>'Sejas',
            'ape_mat'=>'Encinas',
            'username'=>'remy',
            'password'=>'rectitud',
            'tipo'=>'administrador',
            'perfil'=>'imagenes/perfil/user.png',

        ]);
        Usuario::create([
            'nombre'=>'Suleyma',
            'ape_pat'=>'Tarqui',
            'ape_mat'=>'Condori',
            'username'=>'sulecita',
            'password'=>'rectitud',
            'tipo'=>'administrador',
            'perfil'=>'imagenes/perfil/user.png',

        ]);
    }
}
