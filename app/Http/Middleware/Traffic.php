<?php

namespace App\Http\Middleware;

use Closure;
use App\Traffics;
use Illuminate\Support\Carbon;
use App\KitmUsers;

class Traffic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session('userName') == null) {
        $time = Carbon::now()->subDays(1)->endOfDay();
        $year = Carbon::now()->subYears(1)->endOfYear();
        $last = Traffics::where(['visitor' => 0])->first();

        if ($last->updated_at <= $time) {
            Traffics::query()->update(['visits' => 0]);
        }
        
        if ($last->updated_at < $year) {
            Traffics::query()->update(['Jan' => 0]);
            Traffics::query()->update(['Feb' => 0]);
            Traffics::query()->update(['Mar' => 0]);
            Traffics::query()->update(['Apr' => 0]);
            Traffics::query()->update(['May' => 0]);
            Traffics::query()->update(['Jun' => 0]);
            Traffics::query()->update(['Jul' => 0]);
            Traffics::query()->update(['Aug' => 0]);
            Traffics::query()->update(['Sep' => 0]);
            Traffics::query()->update(['Oct' => 0]);
            Traffics::query()->update(['Nov' => 0]);
            Traffics::query()->update(['Dec' => 0]);
        }
        
        Traffics::where(['visitor' => 0])->increment('visits');
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
        Traffics::firstOrCreate(['visitor' => $id]);
        Traffics::where(['visitor' => $id])->increment('visits');

        $current = Carbon::now()->format('M');
        Traffics::where(['visitor' => $id])->increment($current);
    }
        return $next($request);
    }
}
