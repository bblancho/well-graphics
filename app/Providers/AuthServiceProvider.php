<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Commande' => 'App\Policies\CommandePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            if ($user->getRole() == 'admin') {
                return true;
            }
        });

        //return true if auth user type is membre
        Gate::define('isMembre', function($user){
            return $user->getRole() == 'membre';
        });

        //return true if auth user type is client
        Gate::define('isClient', function($user){
            return $user->getRole() == 'client';
        });

    }

}
