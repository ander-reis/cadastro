<?php

namespace Cadastro\Providers;

use Illuminate\Support\ServiceProvider;
use Code\Validator\Cpf;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Validator CPF/CNPJ
         */
        \Validator::extend('cpf', function($attribute, $value, $parameters, $validator){
            return (new Cpf())->isValid($value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Registra faker com a linguagem em portugues pt_BR
         */
        $this->app->extend(\Faker\Generator::class, function (){
            return \Faker\Factory::create('pt_BR');
        });
    }
}
