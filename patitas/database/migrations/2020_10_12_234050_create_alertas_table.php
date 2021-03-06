<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('animal', 50);
            $table->string('imagen', 600);
            $table->string('provincia', 100);
            $table->string('municipio', 100);
            $table->string('detalle', 400);
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alertas');
    }
}
