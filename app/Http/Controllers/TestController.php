<?php

namespace App\Http\Controllers;

use App\KitmUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{
    public function home(){
//        if (Gate::allows('isAdmin')) {
//            dd('Admin allowed');
//        } else {
//            dd('You are not Admin');
//        }
        $viewData = $this->loadViewData();
        return view('mazer.pages.welcome',$viewData);

        $users=[];
        if($viewData&&$viewData['userRole']=='admin'){
            $users=KitmUsers::where('roles_id','<>',1)->get();
        }

        return view('test.pages.welcome',$viewData,compact('users'));
        }

        public function addEmail(Request $request){
            KitmUsers::create([
                'email'=>request('email'),
            ]);
            return redirect('/');
        }
    public function updateRole(Request $request, $id){
        KitmUsers::where('id',$id)->update([
            'roles_id'=>request('role'),
        ]);
        return redirect('/');
    }

    public function adminView() {
        $viewData = $this->loadViewData();
        $users=[];
        if($viewData&&$viewData['userRole']=='admin'){
            $users=KitmUsers::where('roles_id','<>',1)->get();
        }
        return view('mazer.pages.administration',$viewData,compact('users'));
    }
}
