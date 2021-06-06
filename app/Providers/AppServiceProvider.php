<?php

namespace App\Providers;

use App\KitmUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        Blade::if('roles', function ($args) {
            $roles = explode(',', $args);
            $role = "admin";
            //$role = KitmUsers::where(['email' => session('userEmail')])->first()->roles->role_name;            
            if (in_array($role, $roles)) {
                return 1;
            }
            return 0;
        });
    }
}
