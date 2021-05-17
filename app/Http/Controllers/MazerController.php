<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MazerController extends Controller{

    public function index(){
    $viewData = $this->loadViewData();
    return view('admin.main',$viewData);
}

    public function auth(){
        return view('admin/pages/dashboard');
    }

}
