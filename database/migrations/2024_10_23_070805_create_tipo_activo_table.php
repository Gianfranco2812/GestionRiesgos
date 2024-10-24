<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoActivoTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_activo', function (Blueprint $table) {
            $table->id('idtipoactivo');
            $table->char('nombre', 100);
            $table->char('definicion', 200);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_activo');
    }
}
