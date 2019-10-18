<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCurPagamentoDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cur_pagamento_docente', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->integer('cur_pag_cd_pagamento')->default(0);
            $table->integer('cur_pag_cd_bancario')->default(0);
            $table->integer('cur_pag_cd_docente')->default(0);
            $table->integer('cur_pag_cd_curso')->default(0);
            $table->decimal('cur_pag_vl_pagamento', 10, 2)->default(0);
            $table->dateTime('cur_pag_dt_vencimento', 3)->default('01/01/1900');
            $table->dateTime('cur_pag_dt_pagamento', 3)->default('01/01/1900');
            $table->char('cur_pag_fl_siga', 1)->default('');
            $table->string('cur_pag_ds_titulo', 10)->default('');
            $table->dateTime('cur_pag_dt_geracao')->default(\Carbon\Carbon::now());
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
        Schema::dropIfExists('tb_cur_pagamento_docente');
    }
}
