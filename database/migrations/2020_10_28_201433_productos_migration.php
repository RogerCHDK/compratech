<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('nombre');
            $table->decimal('precio',9,2);
            $table->text('descripcion');
            $table->integer('stock')->nullable();
            $table->integer('status'); 
            $table->foreignId('categoria_id')->constrained();
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
        Schema::dropIfExists('productos');
    }
}
