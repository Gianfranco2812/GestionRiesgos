<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->id('idcontrol');
            $table->char('control', 200);
            $table->char('tipo_control', 20);
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('controles');
    }
}
