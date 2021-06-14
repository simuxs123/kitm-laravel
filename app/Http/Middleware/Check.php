<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Closure;

class Check extends Controller
{
    public function handle($request, Closure $next)
    {
        $viewData = $this->loadViewData();
        if (isset($viewData['userRole'])) {
            return $next($request);
        }

        return redirect('/');
    }
}
