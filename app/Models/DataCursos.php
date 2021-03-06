<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class DataCursos extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'tb_cur_data_cursos';

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
     * set created_at
     */
//    const CREATED_AT = 'cur_dt_dt_data';

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
//    protected $dates = ['cur_dt_dt_data'];


    public function cadastroCursos()
    {
        return $this->belongsTo(CadastroCursos::class, 'cur_dt_cd_curso');
    }
}
