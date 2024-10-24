<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivoTable extends Migration
{
    public function up()
    {
        Schema::create('activo', function (Blueprint $table) {
            $table->id('idactivo');
            $table->unsignedBigInteger('idtipoactivo');
            $table->unsignedBigInteger('idproceso');
            $table->char('nombre', 100);
            $table->integer('confidencialidad');
            $table->integer('integridad');
            $table->integer('disponibilidad');
            $table->integer('criticidad');
        

            // Definición de las claves foráneas
            $table->foreign('idtipoactivo')->references('idtipoactivo')->on('tipo_activo')->onDelete('cascade');
            $table->foreign('idproceso')->references('idproceso')->on('proceso')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activo');
    }
}
