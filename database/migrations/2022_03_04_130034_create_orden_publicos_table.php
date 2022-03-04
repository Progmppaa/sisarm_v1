<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenPublicosTable extends Migration
{

    public function up()
    {
        Schema::create('orden_publicos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('orden_publicos');
    }
}
