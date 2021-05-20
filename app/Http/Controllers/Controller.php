<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\KitmUsers;

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
                KitmUsers::create([
                    'email' => session('userEmail')
                ]);
            }
            //$viewData['userRole']=('moksleivis');
            $viewData['userRole']=KitmUsers::where(['email' => session('userEmail')])->first()->roles->role_name;
        }

        return $viewData;
    }
}
