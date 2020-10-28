<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuentesPoderMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuentes_poder', function (Blueprint $table) {
            $table->id();
            $table->string('factor_forma');
            $table->string('alimentador_energia');
            $table->string('certificacion');
            $table->integer('potencia');
            $table->integer('diametro');
            $table->integer('numero_conectores');
            $table->integer('status');
            $table->foreignId('producto_id')->constrained();
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
        Schema::dropIfExists('fuentes_poder');
    }
}
