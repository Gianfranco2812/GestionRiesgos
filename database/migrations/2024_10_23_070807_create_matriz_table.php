<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrizTable extends Migration
{
    public function up()
    {
        Schema::create('matriz', function (Blueprint $table) {
            $table->id('idprobabilidad');
            $table->unsignedBigInteger('idactivo');
            $table->unsignedBigInteger('idamenaza');
            $table->integer('v_probabilidad');
            $table->integer('v_impacto');
            $table->integer('v_riesgo');
            

            // Definición de las claves foráneas
            $table->foreign('idactivo')->references('idactivo')->on('activo')->onDelete('cascade');
            $table->foreign('idamenaza')->references('idamenaza')->on('amenaza')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('matriz');
    }
}
