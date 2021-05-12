<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(){
        $viewData = $this->loadViewData();
        return view('test.pages.welcome',$viewData);
        }
}
