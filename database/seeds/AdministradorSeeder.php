<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use App\Perfil;

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
            'fecha_nacimiento'=>'19/08/1986',
            'username'=>'remy',
            'password'=>'rectitud',
            'tipo'=>'administrador',
            'imagen'=>'imagenes/perfil/user.png',

        ]);
        Usuario::create([
            'nombre'=>'Suleyma',
            'ape_pat'=>'Tarqui',
            'ape_mat'=>'Condori',
            'fecha_nacimiento'=>'17/05/1991',
            'username'=>'sulecita',
            'password'=>'rectitud',
            'tipo'=>'administrador',
            'imagen'=>'imagenes/perfil/user.png',

        ]);
            Perfil::create([
                'idUsuario'=>1,
                'facebook'=>'https://www.facebook.com/reinald.se',
                'email'=>'sejaseninasreinaldo@gmail.com',
                'twitter'=>'https://twitter.com/ESejasE',
                'pinterset'=>'https://es.pinterest.com/login/?referrer=home_page',
        ]);
            Perfil::create([
                'idUsuario'=>2,
                'facebook'=>'https://www.facebook.com/sulma.tarqui?fref=ts',
                'email'=>'sejaseninasreinaldo@gmail.com',
                'twitter'=>'https://twitter.com/ESejasE',
                'pinterset'=>'https://es.pinterest.com/login/?referrer=home_page',

        ]);
    }
}
