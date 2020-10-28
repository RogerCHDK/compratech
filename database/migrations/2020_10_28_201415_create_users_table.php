<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('calle')->nullable();
            $table->string('colonia')->nullable();  
            $table->foreignId('estado_id')->constrained();
            $table->foreignId('municipio_id')->constrained();
            $table->bigInteger('codigo_postal')->nullable();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->bigInteger('telefono');
            $table->integer('status'); 
            $table->bigInteger('tipo_usuario')->unsigned();
            $table->foreign('tipo_usuario')->references('id')->on('tipos_usuarios') ;
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
        Schema::dropIfExists('users');
    }
}
