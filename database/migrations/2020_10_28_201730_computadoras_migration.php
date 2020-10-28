<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComputadorasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tarjeta_madre_id')->unsigned();
            $table->foreign('tarjeta_madre_id')->references('id')->on('tarjetas_madres');
            $table->bigInteger('tarjeta_video_id')->unsigned();
            $table->foreign('tarjeta_video_id')->references('id')->on('tarjetas_videos');
            $table->bigInteger('procesador_id')->unsigned();
            $table->foreign('procesador_id')->references('id')->on('procesadores');
            $table->bigInteger('fuente_poder_id')->unsigned();
            $table->foreign('fuente_poder_id')->references('id')->on('fuentes_poder');
            $table->bigInteger('ram_id')->unsigned();
            $table->foreign('ram_id')->references('id')->on('ram');
            $table->bigInteger('almacenamiento_id')->unsigned();
            $table->foreign('almacenamiento_id')->references('id')->on('almacenamiento');
            $table->bigInteger('gabinete_id')->unsigned();
            $table->foreign('gabinete_id')->references('id')->on('gabinetes');
            $table->string('tipo');
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
        Schema::dropIfExists('computadoras');
    }
}
