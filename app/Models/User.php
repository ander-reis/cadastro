<?php

namespace Cadastro\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;
use Yadahan\AuthenticationLog\AuthenticationLogable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, LogsActivity, AuthenticationLogable;

    /**
     * table
     *
     * @var string
     */
    protected $table = 'Cadastro_Professores';

    /**
     * chave primária
     *
     * @var string
     */
    protected $primaryKey = 'Codigo_Professor';

    /**
     * set token
     *
     * @var null
     */
    protected $rememberTokenName = null;

    /**
     * set casts
     *
     * @var array
     */
    protected $casts = ['Codigo_Professor' => 'string'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Codigo_Professor',
        'Nome',
        'Caixa_Postal',
        'Endereco',
        'Numero',
        'Complemento',
        'Bairro',
        'Cidade',
        'Estado',
        'CEP',
        'DDD_Telefone_Residencial',
        'Telefone_Residencial',
        'Telefone_Residencial_Ramal',
        'DDD_Telefone_Comercial',
        'Telefone_Comercial',
        'Telefone_Comercial_Ramal',
        'DDD_Telefone_Celular',
        'Telefone_Celular',
        'CPF',
        'RG',
        'PIS',
        'Naturalidade',
        'Estado_Civil',
        'CTPS',
        'CTPS_Serie',
        'Data_Aniversario',
        'Data_Carteirinha',
        'Data_Validade',
        'Data_Carencia',
        'Data_Situacao',
        'Sexo',
        'Situacao',
        'Materia',
        'Pre',
        '[1_4Serie]',
        '[5_8Serie]',
        'Ens_Medio',
        'Ens_Superior',
        '[2_3Grau]',
        'Tecnico',
        'Supletivo',
        'Curso_Livre',
        'Emissao_Carteira',
        'Email',
        'Sindicalizado',
        'Recuperado',
        'Avulsas',
        'Correspondencia',
        'NewsLetter',
        'Info_Email',
        'Info_Carta',
        'Info_NaoReceber',
        'Banco',
        'Agencia',
        'Conta',
        'Poupanca',
        'Conjunta',
        'Ok',
        'Status',
        'Nome_Mae',
        'Orgao_Expedidor',
        'Observacao',
        'Senha',
        'Votou',
        'Cidade_Nasc',
        'UF_Nasc',
        'Data_Expedicao',
        'Nome_Pai',
        'Passar_Urna',
        'Urna',
        'Agenda',
        'Rec_Agenda',
        'Envio_Agenda',
        'Obs_Eleicao',
        'ds_latitude',
        'ds_longitude',
        'id_operadora',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Senha',
        'password'
    ];

    /**
     * reconfigura timestamp
     */
    const CREATED_AT = 'Data_Inicio';
    const UPDATED_AT = 'Data_Modificacao';

    /**
     * retorna senha
     *
     * @return mixed|string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * configura logging
     */
    protected static $logAttributes = [
        'Codigo_Professor',
        'Nome',
        'Caixa_Postal',
        'Endereco',
        'Numero',
        'Complemento',
        'Bairro',
        'Cidade',
        'Estado',
        'CEP',
        'DDD_Telefone_Residencial',
        'Telefone_Residencial',
        'Telefone_Residencial_Ramal',
        'DDD_Telefone_Comercial',
        'Telefone_Comercial',
        'Telefone_Comercial_Ramal',
        'DDD_Telefone_Celular',
        'Telefone_Celular',
        'CPF',
        'RG',
        'PIS',
        'Naturalidade',
        'Estado_Civil',
        'CTPS',
        'CTPS_Serie',
        'Data_Aniversario',
        'Data_Carteirinha',
        'Data_Validade',
        'Data_Carencia',
        'Data_Situacao',
        'Sexo',
        'Situacao',
        'Materia',
        'Pre',
        '[1_4Serie]',
        '[5_8Serie]',
        'Ens_Medio',
        'Ens_Superior',
        '[2_3Grau]',
        'Tecnico',
        'Supletivo',
        'Curso_Livre',
        'Emissao_Carteira',
        'Email',
        'Sindicalizado',
        'Recuperado',
        'Avulsas',
        'Correspondencia',
        'NewsLetter',
        'Info_Email',
        'Info_Carta',
        'Info_NaoReceber',
        'Banco',
        'Agencia',
        'Conta',
        'Poupanca',
        'Conjunta',
        'Ok',
        'Status',
        'Nome_Mae',
        'Orgao_Expedidor',
        'Observacao',
        'Senha',
        'Votou',
        'Cidade_Nasc',
        'UF_Nasc',
        'Data_Expedicao',
        'Nome_Pai',
        'Passar_Urna',
        'Urna',
        'Agenda',
        'Rec_Agenda',
        'Envio_Agenda',
        'Obs_Eleicao',
        'ds_latitude',
        'ds_longitude',
        'id_operadora',
    ];

    /**
     * habilita log
     *
     * @var bool
     */
    protected static $logFillable = true;

    /**
     * set log
     *
     * @var string
     */
    protected static $logName = 'user_cadastro_professores';

}
