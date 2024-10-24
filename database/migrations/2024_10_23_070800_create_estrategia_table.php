<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstrategiaTable extends Migration
{
    public function up()
    {
        Schema::create('estrategia', function (Blueprint $table) {
            $table->id('idestrategia');
            $table->char('estrategia_mitigacion', 200);
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('estrategia');
    }
}
