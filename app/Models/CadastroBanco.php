<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class CadastroBanco extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'Cadastro_Banco';

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
    const CREATED_AT = false;

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
}
