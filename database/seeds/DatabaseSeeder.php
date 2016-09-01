<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {

            $this->call(AdministradorSeeder::class);
            $this->call(GerenteSeeder::class);
            $this->call(ApoyoSeeder::class);
            $this->call(ClienteSeeder::class);
            $this->call(DjSeeder::class);
            $this->call(GrupoSeeder::class);
            $this->call(LuminoSeeder::class);
            $this->call(SonidistaSeeder::class);


    }
}
