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
        
        Blade::if('admin', function () {
            $role = KitmUsers::where(['email' => session('userEmail')])->first()->roles->role_name;            
            if ($role == 'admin') {
                return 1;
            }
            return 0;
        });

        Blade::if('darbuotojas', function () {
            $role = KitmUsers::where(['email' => session('userEmail')])->first()->roles->role_name;            
            if ($role == 'darbuotojas' or $role == 'admin') {
                return 1;
            }
            return 0;
        });

        Blade::if('mokytojas', function () {
            $role = KitmUsers::where(['email' => session('userEmail')])->first()->roles->role_name;            
            if ($role == 'mokytojas' or $role == 'admin') {
                return 1;
            }
            return 0;
        });

        Blade::if('moksleivis', function () {
            $role = KitmUsers::where(['email' => session('userEmail')])->first()->roles->role_name;            
            if ($role == 'moksleivis' or $role == 'admin') {
                return 1;
            }
            return 0;
        });
    }
}
