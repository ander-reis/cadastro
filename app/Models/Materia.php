<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    /**
     * Conexão database SINPRO
     */
//    protected $connection = 'sqlsrv-sinpro';

    /**
     * table
     *
     * @var string
     */
    protected $table = 'Materia';

    /**
     * chave primaria
     *
     * @var string
     */
    protected $primaryKey = 'Codigo_Materia';

    /**
     * set timestamps
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = ['Materia'];


}
