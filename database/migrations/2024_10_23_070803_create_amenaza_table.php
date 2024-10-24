<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenazaTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('amenaza')) {
            Schema::create('amenaza', function (Blueprint $table) {
                $table->id('idamenaza');
                $table->char('nombre', 100);
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('amenaza');
    }
}
