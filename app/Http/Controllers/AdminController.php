<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class AdminController extends Controller{

    public function moduleSurveys(){
        $modules = Module::all();
        return view('admin/pages/module-surveys', compact('modules'));
    }


    public function auth(){
        return view('admin/pages/dashboard');
    }

    public function restriction() {
        return view('admin.pages.restriction');
    }

}
