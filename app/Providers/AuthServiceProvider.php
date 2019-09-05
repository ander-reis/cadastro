<?php

namespace Cadastro\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Cadastro\Auth\CustomUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Cadastro\Model' => 'Cadastro\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /**
         * registra provider personalizado de autenticação
         */
        \Auth::provider('custom-user', function ($app, array $config){
            return new CustomUserProvider($app['hash'], $config['model']);
        });
    }
}
