<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->integer('CI')->unique()->required();
            $table->string('nombres')->required();
            $table->string('apellidos')->required();
            $table->string('grado')->nullable();
            $table->string('dependencia')->required();
            $table->string('destacamento')->required();
            $table->string('compania')->required();
            $table->bigInteger('telefono')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
