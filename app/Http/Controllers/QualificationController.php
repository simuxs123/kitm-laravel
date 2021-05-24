<?php

namespace App\Http\Controllers;

use App\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index()
    {
        $userName = explode(' ', session('userName'));
        $name = $userName[1];
        $surname = $userName[0];
        return view('admin.pages.qualification', compact('name', 'surname'));
    }

    public function saveQuali(Request $request) {
        Qualification::create([
        ]);
    }
}
