<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class CadastroDocente extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'tb_cur_cadastro_docente';

    /**
     * chave primaria
     *
     * @var string
     */
    protected $primaryKey = 'cur_doc_cd_docente';

    /**
     * set created_at
     */
    const CREATED_AT = 'cur_doc_dt_data_inicio';

    /**
     * set updated_at
     */
    const UPDATED_AT = false;

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
    protected $dates = ['cur_doc_dt_data_inicio', 'cur_doc_dt_data_nasc', 'cur_doc_dt_rg_emissao', 'cur_doc_dt_carteira_emissao'];


    public function pagamentoDocente()
    {
        return $this->belongsTo(PagamentoDocente::class, 'cur_pag_cd_docente');
    }
}
