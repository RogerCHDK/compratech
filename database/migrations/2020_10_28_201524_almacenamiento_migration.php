<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlmacenamientoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacenamiento', function (Blueprint $table) {
            $table->id();
            $table->string('interface');
             $table->integer('capacidad');
             $table->integer('velocidad_rotacion');
             $table->string('tipo_almacenamiento');
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
        Schema::dropIfExists('almacenamiento');
    }
}
