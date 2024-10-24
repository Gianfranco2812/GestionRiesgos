<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamientoRiesgoTable extends Migration
{
    public function up()
    {
        Schema::create('tratamiento_riesgo', function (Blueprint $table) {
            $table->char('idtratamiento', 18)->primary();
            $table->unsignedBigInteger('idestrategia');
            $table->unsignedBigInteger('idmitigacion');
            $table->unsignedBigInteger('idcontrol');
            $table->unsignedBigInteger('idactivo');
            $table->char('evento', 50);
            $table->char('tipo_implementacion', 50);
            $table->char('responsable', 50);
            $table->char('frecuencia_seguimiento', 20);
            $table->integer('valor_riesgo_residual');
            $table->char('aceptacion_riesgo_residual', 100);
            $table->integer('declaracion_aplicabilidad');
            $table->char('responsable_residual', 50);
            $table->char('plazo_residual', 50);
            $table->date('fecha_implementacion_residual');
            $table->date('fecha_seguimiento_residual');
           

            // Definir claves foráneas
            $table->foreign('idestrategia')->references('idestrategia')->on('estrategia')->onDelete('cascade');
            $table->foreign('idmitigacion')->references('idmitigacion')->on('mitigaciones')->onDelete('cascade');
            $table->foreign('idcontrol')->references('idcontrol')->on('controles')->onDelete('cascade');
            $table->foreign('idactivo')->references('idactivo')->on('activo')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tratamiento_riesgo');
    }
}