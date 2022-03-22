<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrosTable extends Migration
{

    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            $table->string('siglas_jefe')->nulleable();
            $table->string('grado');
            $table->string('nombres')->require();
            $table->string('apellidos')->require();
            $table->integer('CI')->nullable();
            $table->string('cargo')->require();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
