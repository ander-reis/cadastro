<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class CadastroCursos extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'tb_cur_cadastro_cursos';

    /**
     * chave primaria
     *
     * @var string
     */
    protected $primaryKey = 'cur_cur_cd_curso';

    /**
     * set created_at
     */
    const CREATED_AT = 'cur_cur_dt_cadastro';

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
    protected $dates = ['cur_cur_dt_cadastro', 'cur_cur_hr_inicio', 'cur_cur_hr_final', 'cur_cur_dt_vencimento'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataCursos()
    {
        return $this->hasMany(DataCursos::class, 'cur_dt_cd_curso');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agendamentoCursos()
    {
        return $this->hasMany(CursoAgedamento::class, 'cur_agt_cd_curso');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pagamentoDocente()
    {
        return $this->hasOne(PagamentoDocente::class, 'cur_pag_cd_curso');
    }
}
