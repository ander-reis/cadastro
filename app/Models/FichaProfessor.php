<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class FichaProfessor extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'tb_jur_ficha_professor';

    /**
     * chave primaria
     *
     * @var null
     */
    protected $primaryKey = 'jur_fip_cd_fic_pro';

    /**
     * set created_at
     */
    const CREATED_AT = null;

    /**
     * set updated_at
     */
    const UPDATED_AT = null;

    /**
     * set timestamps
     *
     * @var bool
     */
    public $timestamps = false;
}
