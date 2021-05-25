<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\KitmUsers;
use Closure;

class Roles extends Controller
{
    public function handle($request, Closure $next, ...$roles)
    {
        $viewData = $this->loadViewData();
        if (isset($viewData['userRole'])) {
            foreach ($roles as $role) {
                if ($role == $viewData['userRole']) {
                    return $next($request);
                }
            }
        }

        abort(Response::HTTP_UNAUTHORIZED);
    }
}
