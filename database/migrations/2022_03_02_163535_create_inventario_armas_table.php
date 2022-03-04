<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioArmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_armas', function (Blueprint $table) {
            $table->id();
            // Verificar relaciones
            $table->string('institucion')->required();
            $table->string('estados');
            $table->string('armas')->required();
            $table->string('parque_armas')->nullable();
            $table->string('estatus_arma')->nullable();
            $table->integer('personas')->UPPER()->nullable();
            $table->integer('serial')->unique()->required();

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
        Schema::dropIfExists('inventario_armas');
    }
}
