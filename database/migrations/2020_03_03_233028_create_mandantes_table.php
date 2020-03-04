<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMandantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mandantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('correo');
            $table->string('cargo');
            $table->string('empresa');
            $table->string('rut');
            $table->string('pais_region');
            $table->string('estado_provincia');
            $table->string('ciudad');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('telefono2');
            $table->integer('fax');
            $table->string('web');
            $table->text('notas');
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
        Schema::dropIfExists('mandantes');
    }
}
