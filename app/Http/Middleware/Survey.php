<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;
use App\Module;

class Survey
{
    public function handle($request, Closure $next)
    {
        Module::where('date', '<=', Carbon::now())->update([
            'date' => null,
            'active' => 0,
        ]);
        $id = $request->route('module');
        $reason = 'Pildymo terminas baigėsi';

        if ($id->date > Carbon::now()) {
            return $next($request);
        }

        return redirect('/restriction')->with('reason', $reason);
    }
}
