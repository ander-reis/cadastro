<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class FichaConsulta extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'tb_jur_ficha_consulta';

    /**
     * chave primaria
     *
     * @var null
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
    const CREATED_AT = 'jur_fic_dt_cadastro';

    /**
     * set updated_at
     */
    const UPDATED_AT = null;
}
