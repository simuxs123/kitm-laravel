<?php

namespace App\Providers;

use App\KitmUsers;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function( $user) {
            return $user->role_name == 'admin';
        });

        Gate::define('isDarbuotojas', function( $user) {
            return $user->roles->role_name == 'darbuotojas';
        });

        Gate::define('isMokytojas', function( $user) {
            return $user->roles->role_name == 'mokytojas';
        });
        Gate::define('isMoksleivis', function( $user) {
            return $user->roles->role_name == 'moksleivis';
        });
    }
}
