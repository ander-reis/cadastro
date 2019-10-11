<?php

namespace Cadastro\Models;

use Illuminate\Database\Eloquent\Model;

class CadastroEscolas extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'Cadastro_Escolas';

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
    const CREATED_AT = 'dt_inicio';

    /**
     * set updated_at
     */
    const UPDATED_AT = 'Data_Alteracao';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'CGC_Escola',
        'CGC_Mantenedora',
        'Razao_Social',
        'Nome_Fantasia',
        'Endereco',
        'Numero',
        'Complemento',
        'Bairro',
        'Cidade',
        'Estado',
        'CEP',
        'Telefone1',
        'Telefone1_Ramal',
        'Telefone2',
        'Telefone2_Ramal',
        'FAX',
        'Fax_Ramal',
        'Data_Alteracao',
        'Diretor_Base',
        'Pre',
        '[1_4Serie]',
        '[5_8Serie]',
        'Ens_Medio',
        'Ens_Superior',
        'Tecnico',
        '[2_3Grau]',
        'Supletivo',
        'Curso_Livre',
        'Situacao',
        'Matriz_Filial',
        'Gera_Boleto',
        'Gera_Lista',
        'Gera_Sindical',
        'Sem_Cobranca',
        'Tipo',
        'Email',
        'Email2',
        'Contato',
        'Contato_Nome',
        'Contato_DDD',
        'Contato_Telefone',
        'Contato_Ramal',
        'Contato_Email',
        'Correspondencia',
        'Ok',
        'Status',
        'Categoria',
        'dt_inicio',
        'fl_listaemail',
        'nr_listadia',
        'status_web',
        'Site',
        'CNAE',
        'hor_1dia',
        'hor_2dia',
        'hor_3dia',
        'hor_manha',
        'hor_tarde',
        'hor_noite',
        'hor_intervalo',
        'hor_reuniao',
        'obs1',
        'obs2',
        'urna_local',
        'contato_eleicao',
        'info_eleicao',
        'agente_responsavel',
        'Urna',
        'fl_judicial',
        'Observacao',
        'ds_latitude',
        'ds_longitude',
        'Permite_Visita',
        'Periodo_Manha',
        'Periodo_Tarde',
        'Periodo_Noite',
        'fl_estacionamento',
        'ds_contato_pedagogico',
        'ds_email_pedagogico',
    ];
}
