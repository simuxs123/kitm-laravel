<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Datepicker;
use Closure;
use Illuminate\Support\Carbon;
use App\SelfAssessment;
use App\KitmUsers;

class FormFill extends Controller
{
    public function handle($request, Closure $next)
    {
        Datepicker::where('end_date','<=', Carbon::now()->toDateTimeString())->delete(); //naujas middleware, kad leisti pildyti forma, jei laikas baigesi, apsaugoti routus

        if (Datepicker::exists()) {
            return $next($request);
            }

        return redirect('/self-assessment');
        }
    }
