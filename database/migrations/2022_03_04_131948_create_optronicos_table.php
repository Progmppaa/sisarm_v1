<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptronicosTable extends Migration
{

    public function up()
    {
        Schema::create('optronicos', function (Blueprint $table) {
            $table->id();
            $table->string('cod');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('optronicos');
    }
}
