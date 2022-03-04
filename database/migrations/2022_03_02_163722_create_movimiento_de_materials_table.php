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
            // Verificar Campos
            $table->string('nro_doc')->nullable();
            $table->date('fecha_doc')->nullable();
            $table->string('remitente')->nullable();
            $table->string('destinatario')->nullable();
            $table->string('asunto')->nullable();
            $table->string('armas')->nullable();
            $table->string('serial')->nullable();
            $table->string('cargadores')->nullable();
            $table->string('cartucho')->nullable();
            $table->integer('cant_solicitada_armas')->nullable();
            $table->integer('cant_solicitada_cargadores')->nullable();
            $table->integer('cant_solicitada_cartuchos')->nullable();
            $table->integer('cant_auto_armas')->nullable();
            $table->integer('cant_auto_cargadores')->nullable();
            $table->integer('cant_auto_cartuchos')->nullable();
            $table->string('notas')->nullable();
            
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
