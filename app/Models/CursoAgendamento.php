<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class CursoAgendamento extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'tb_cur_agendamento';

    /**
     * chave primaria
     *
     * @var string
     */
    protected $primaryKey = 'cur_agt_cd_agendamento';

    /**
     * set autoincrement
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * set created_at
     */
    const CREATED_AT = 'cur_agt_dt_cadastro';

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
    protected $dates = ['cur_agt_dt_cadastro'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cadastroCursos()
    {
        return $this->belongsTo(CadastroCursos::class, 'cur_agt_cd_curso');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cadastroProfessor()
    {
        return $this->belongsTo(CadastroCursos::class, 'cur_agt_cd_prof_geral');
    }
}
