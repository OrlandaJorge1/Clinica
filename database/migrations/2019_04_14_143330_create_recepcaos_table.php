<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecepcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 150);
            $table->int('contacto', 150);
            $table->string('Tipo_usuario', 150);
            $table->string('password');
           
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
        Schema::dropIfExists('recepcaos');
    }
}
