<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombre');
            $table->string('ape_pat');
            $table->string('ape_mat');
            $table->string('username');
            $table->string('password');
            $table->enum('tipo', ['administrador', 'gerente','sonidista','lumino','cliente','apoyo','grupo','dj']);
            $table->string('perfil');
            $table->enum('activo', [1, 0])->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
