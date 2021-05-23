<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;
use App\KitmUsers;
use Closure;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next, ...$roles)
    {
        $check = KitmUsers::where(['email' => session('userEmail')])->first()->roles->role_name;

        foreach ($roles as $role) {
            if ($role == $check) {
                return $next($request);
            }
        }

        abort(Response::HTTP_UNAUTHORIZED);
    }
}
