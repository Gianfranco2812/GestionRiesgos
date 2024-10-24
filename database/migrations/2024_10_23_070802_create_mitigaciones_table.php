<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitigacionesTable extends Migration
{
    public function up()
    {
        Schema::create('mitigaciones', function (Blueprint $table) {
            $table->id('idmitigacion');
            $table->char('actividad', 200);
    
        });
    }

    public function down()
    {
        Schema::dropIfExists('mitigaciones');
    }
}