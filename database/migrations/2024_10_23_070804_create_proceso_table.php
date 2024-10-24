<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('proceso')){
            Schema::create('proceso', function (Blueprint $table) {
                $table->id('idproceso');
                $table->char('nombre', 100);
                
            });
        }

    }


    
    

    public function down()
    {
        Schema::dropIfExists('proceso');
    }
}