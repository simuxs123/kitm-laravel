<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Closure;
use Illuminate\Support\Facades\Redis;

class Roles extends Controller
{
    public function handle($request, Closure $next, ...$roles)
    {
        $reason = 'Neturite prieigos teisių';
        $viewData = $this->loadViewData();
            foreach ($roles as $role) {
                if ($role == $viewData['userRole']) {
                    return $next($request);
                } 
            }
        
        

        return redirect('/restriction')->with('reason', $reason);
    }
}
