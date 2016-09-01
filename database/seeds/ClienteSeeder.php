<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use Faker\Factory as Faker;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<15;$i++) {
            $faker = Faker::create();
            Usuario::create([
                'nombre' => $faker->name,
                'ape_pat' => $faker->firstName,
                'ape_mat' => $faker->lastName,
                'username' => $faker->userName,
                'password' => 'rectitud',
                'tipo' => 'cliente',
                'perfil' => "imagenes/perfil/user.png",

            ]);
        }
    }
}
