<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroBancoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cadastro_Banco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CodBanco', 3);
            $table->string('Banco', 55);
            $table->tinyInteger('Ativo');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cadastro_Banco');
    }
}
