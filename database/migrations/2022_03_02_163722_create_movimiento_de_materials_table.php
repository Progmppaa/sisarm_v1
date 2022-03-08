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
            // $table->string('nro_doc')->required();
            // $table->date('fecha_doc')->required();
            $table->string('remitente')->required();
            $table->string('destinatario')->required();
            $table->string('asunto')->required();
            $table->string('armas')->required();
            $table->string('serial')->required();
            $table->string('cargadores')->required();
            $table->string('cartucho')->required();
            // $table->integer('cant_solicitada_armas')->required();
            // $table->integer('cant_solicitada_cargadores')->required();
            // $table->integer('cant_solicitada_cartuchos')->required();
            // $table->integer('cant_auto_armas')->required();
            // $table->integer('cant_auto_cargadores')->required();
            // $table->integer('cant_auto_cartuchos')->required();
            // $table->string('notas')->required();
            
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
