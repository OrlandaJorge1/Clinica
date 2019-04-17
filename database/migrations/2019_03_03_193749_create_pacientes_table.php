<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150);
            $table->string('sexo', 140);
            $table->date('data_nascimeto');
            $table->string('local_nascimento', 150);
            $table->integer('peso');
            $table->integer('irmaos');
            $table->string('nome_pai', 150);
            $table->string('nome_mae', 150);
            $table->string('residencia', 150);
            $table->string('doencas_cronicas', 150);
            $table->string('email',100);
            $table->integer('contacto');
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
        Schema::dropIfExists('pacientes');
    }
}
