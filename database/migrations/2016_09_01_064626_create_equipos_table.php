<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id_equipo');
            $table->string('nombre');
            $table->string('marca');
            $table->string('color');
            $table->enum('estado',[1,0])->default(1);
            $table->enum('tipo_equipo', ['Sub', 'Agudo','Luminaria','Consola','Pc','Cable','Monitor','Microfono','Caja','DriveRack']);
            $table->string('serie');
            $table->string('seril_no');
            $table->string('caracteristicas');
            $table->string('imagen_equipo');
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
        Schema::drop('equipos');
    }
}
