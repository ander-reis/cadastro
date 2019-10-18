<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class PagamentoDocente extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'tb_cur_pagamento_docente';

    /**
     * chave primaria
     *
     * @var string
     */
    protected $primaryKey = null;

    /**
     * set autoincrement
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * datetime
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * set dates
     *
     * @var array
     */
    protected $dates = ['cur_pag_dt_vencimento', 'cur_pag_dt_pagamento', 'cur_pag_dt_geracao'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cadastroCursos()
    {
        return $this->belongsTo(CadastroCursos::class, 'cur_pag_cd_curso');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cadastroDocente()
    {
        return $this->belongsTo(PagamentoDocente::class, 'cur_pag_cd_docente');
    }
}
