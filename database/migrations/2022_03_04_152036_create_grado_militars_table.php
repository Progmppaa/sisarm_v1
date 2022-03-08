<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradoMilitarsTable extends Migration
{
    public function up()
    {
        Schema::create('grado_militars', function (Blueprint $table) {
            $table->id();
            $table->string('grado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grado_militars');
    }
}
