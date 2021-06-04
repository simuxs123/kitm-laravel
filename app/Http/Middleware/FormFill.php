<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Datepicker;
use Closure;
use Illuminate\Support\Carbon;
use App\Qualification;
use App\KitmUsers;

class FormFill extends Controller
{
    public function handle($request, Closure $next)
    {
        Datepicker::where('end_date','<=', Carbon::now()->toDateTimeString())->delete(); //naujas middleware, kad leisti pildyti forma, jei laikas baigesi, apsaugoti routus
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
        $qualiExists = Qualification::where(['user_id' => $id])->exists();

        if (Datepicker::exists() && $qualiExists) {
            return $next($request);
            }

        return redirect('/self-assessment');
        }
    }
