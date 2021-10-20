<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelesTable extends Migration
{    
    public function up()
    {
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('ciudad', 50);
            $table->tinyinteger('estrellas');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hoteles');
    }
}
