<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientoDeMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_de_materials', function (Blueprint $table) {
            $table->id();
            $table->string('nro_doc')->required();
            $table->string('remitente')->required();
            $table->string('destinatario')->required();
            $table->string('asunto')->required();
            $table->json('armas')->required();
            $table->integer('cargadores');
            $table->integer('cartuchos');

            
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
        Schema::dropIfExists('movimiento_de_materials');
    }
}
