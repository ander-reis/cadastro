<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class CepSP extends Model
{
    /**
     * Conexão database SINPRO
     */
    protected $connection = 'sqlsrv-sinpro';

    protected $table = 'CepSP';

    protected $primaryKey = 'contador';

    protected $fillable = [
        'Tipo',
        'Logradouro',
        'Complemento',
        'Bairro',
        'Cidade',
        'UF',
        'Cep'
    ];

    public $timestamps = false;
}
