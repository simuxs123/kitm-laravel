<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MazerController extends Controller{

    public function index(){
    $viewData = $this->loadViewData();
    return view('mazer.main',$viewData);
}

}
