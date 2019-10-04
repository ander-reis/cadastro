<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCepspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CepSP', function (Blueprint $table) {
            $table->bigIncrements('contador');
            $table->string('Tipo', 15)->default('');
            $table->string('Logradouro', 65)->default('');
            $table->string('Complemento', 88)->default('');
            $table->string('Bairro', 63)->default('');
            $table->string('Cidade', 32)->default('');
            $table->string('UF', 2)->default('');
            $table->string('Cep', 9)->default('');
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
        Schema::dropIfExists('CepSP');
    }
}
