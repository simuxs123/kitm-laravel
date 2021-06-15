<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\KitmUsers;
use Illuminate\Support\Carbon;
use App\Traffics;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function loadViewData()
    {
        $viewData = [];

        // Check for flash errors
        if (session('error')) {
            $viewData['error'] = session('error');
            $viewData['errorDetail'] = session('errorDetail');
        }

        // Check for logged on user
        if (session('userName'))
        {
            $viewData['userName'] = session('userName');
            $viewData['userEmail'] = session('userEmail');
            $viewData['userTimeZone'] = session('userTimeZone');


            $usercheck = KitmUsers::where(['email' => session('userEmail')])->first();
            if ($usercheck === null) {
                $userName = explode(' ', session('userName'));
                $name = $userName[1];
                $surname = $userName[0];
                KitmUsers::create([
                    'name' => $name,
                    'surname' => $surname,
                    'email' => session('userEmail')
                ]);
            }

            if (!$usercheck == null) {
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
            
            $viewData['userRole']=KitmUsers::where(['email' => session('userEmail')])->first()->roles->role_name;
        }

        return $viewData;
    }
}
