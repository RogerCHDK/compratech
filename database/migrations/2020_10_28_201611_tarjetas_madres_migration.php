<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TarjetasMadresMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas_madres', function (Blueprint $table) {
            $table->id();
            $table->string('familia_procesador');
            $table->string('circuito_integrado');
            $table->string('socket_procesador');
            $table->integer('memoria_interna');
            $table->string('tipo_memoria');
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
        Schema::dropIfExists('tarjetas_madres');
    }
}
