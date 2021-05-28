<?php

namespace App\Http\Controllers;

use App\KitmUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    public function home(){
        $viewData = $this->loadViewData();
        return view('admin.pages.welcome',$viewData);
    }

    public function addEmail(Request $request){
        KitmUsers::create([
            'email'=>request('email'),
        ]);
        return back();
    }
    public function updateRole(Request $request, $id){
        KitmUsers::where('id',$id)->update([
            'roles_id'=>request('role'),
        ]);
        return back();
    }

    public function adminView() {
        $viewData = $this->loadViewData();
        $users=KitmUsers::all();

        return view('admin.pages.administration',$viewData,compact('users'));
    }
}
