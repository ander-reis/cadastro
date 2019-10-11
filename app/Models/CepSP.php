<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class CepSP extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'CepSP';

    /**
     * chave primaria
     *
     * @var string
     */
    protected $primaryKey = 'contador';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'Tipo',
        'Logradouro',
        'Complemento',
        'Bairro',
        'Cidade',
        'UF',
        'Cep'
    ];

    /**
     * set timestamps
     *
     * @var bool
     */
    public $timestamps = false;
}
