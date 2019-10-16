<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cadastro_Escolas', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->timestamps();
            $table->string('CGC_Escola', 18)->default('');
            $table->string('CGC_Mantenedora', 18)->default('');
            $table->string('Razao_Social', 200)->default('');
            $table->string('Nome_Fantasia', 200)->default('');
            $table->string('Endereco', 63)->default('');
            $table->string('Numero', 6)->default('');
            $table->string('Complemento', 50)->default('');
            $table->string('Bairro', 59)->default('');
            $table->string('Cidade', 21)->default('');
            $table->string('Estado', 2)->default('');
            $table->string('CEP', 9)->default('');
            $table->string('Telefone1', 20)->default('');
            $table->string('Telefone1_Ramal', 9)->default('');
            $table->string('Telefone2', 20)->default('');
            $table->string('Telefone2_Ramal', 9)->default('');
            $table->string('FAX', 20)->default('');
            $table->string('Fax_Ramal', 9)->default('');
            $table->dateTime('Data_Alteracao', 3)->default('01/01/1900');
            $table->string('Diretor_Base', 50)->default('');
            $table->smallInteger('Pre')->default(0);
            $table->smallInteger('1_4Serie')->default(0);
            $table->smallInteger('5_8Serie')->default(0);
            $table->smallInteger('Ens_Medio')->default(0);
            $table->smallInteger('Ens_Superior')->default(0);
            $table->smallInteger('Tecnico')->default(0);
            $table->smallInteger('2_3Grau')->default(0);
            $table->smallInteger('Supletivo')->default(0);
            $table->smallInteger('Curso_Livre')->default(0);
            $table->tinyInteger('Situacao')->default(0);
            $table->tinyInteger('Matriz_Filial')->default(0);
            $table->smallInteger('Gera_Boleto')->default(1);
            $table->smallInteger('Gera_Lista')->default(0);
            $table->smallInteger('Gera_Sindical')->default(0);
            $table->smallInteger('Sem_Cobranca')->default(0);
            $table->string('Tipo', 1)->default('A');
            $table->string('Email', 120)->default('');
            $table->string('Email2',120)->default('');
            $table->string('Contato', 50)->default('');
            $table->string('Contato_Nome', 50)->default('');
            $table->string('Contato_DDD', 2)->default('11');
            $table->string('Contato_Telefone', 20)->default('');
            $table->string('Contato_Ramal', 9)->default('');
            $table->string('Contato_Email', 120)->default('');
            $table->tinyInteger('Correspondencia')->default(1);
            $table->char('Ok', 1)->default('');
            $table->string('Status', 1)->default('');
            $table->tinyInteger('Categoria')->default(1);
            $table->dateTime('dt_inicio', 3)->default(\Carbon\Carbon::now());
            $table->tinyInteger('fl_listaemail')->default(1);
            $table->tinyInteger('nr_listadia')->default(20);
            $table->char('status_web', 1)->default('');
            $table->string('Site', 120)->default('');
            $table->char('CNAE', 10)->default('');
            $table->tinyInteger('hor_1dia')->default(0);
            $table->tinyInteger('hor_2dia')->default(0);
            $table->tinyInteger('hor_3dia')->default(0);
            $table->string('hor_manha', 30)->default('');
            $table->string('hor_tarde', 30)->default('');
            $table->string('hor_noite', 30)->default('');
            $table->string('hor_intervalo', 50)->default('');
            $table->string('hor_reuniao', 100)->default('');
            $table->string('obs1', 200)->default('');
            $table->string('obs2', 200)->default('');
            $table->string('urna_local', 100)->default('');
            $table->string('contato_eleicao', 50)->default('');
            $table->string('info_eleicao', 500)->default('');
            $table->string('agente_responsavel', 50)->default('');
            $table->integer('Urna')->default(0);
            $table->tinyInteger('fl_judicial')->default(0);
            $table->string('Observacao', 50)->default('');
            $table->string('ds_latitude', 15)->default('');
            $table->string('ds_longitude', 15)->default('');
            $table->tinyInteger('Permite_Visita')->default(0);
            $table->tinyInteger('Periodo_Manha')->default(0);
            $table->tinyInteger('Periodo_Tarde')->default(0);
            $table->tinyInteger('Periodo_Noite')->default(0);
            $table->tinyInteger('fl_estacionamento')->default(0);
            $table->string('ds_contato_pedagogico', 50)->default('');
            $table->string('ds_email_pedagogico', 150)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cadastro_Escolas');
    }
}
