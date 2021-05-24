<?php

namespace App\Http\Controllers;

use App\KitmUsers;
use App\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index()
    {
        $userName = explode(' ', session('userName'));
        $name = $userName[1];
        $surname = $userName[0];
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
        $list = Qualification::where(['user_id' => $id])->get();
        $teachers = KitmUsers::where(['roles_id' => 3])->get();
        $results = array();
        foreach ($teachers as $teacher) {
            $sum = Qualification::where(['user_id' => $teacher->id])->sum('hours');
            array_push($results, [$teacher->name, $teacher->surname, $sum]);
        }


        return view('admin.pages.qualification', compact('name', 'surname', 'list', 'results'));
    }

    public function saveQuali(Request $request) {
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
        Qualification::create([
            'user_id' => $id,
            'name' => request('name'),
            'surname' => request('surname'),
            'duty' => request('duty'),
            'category' => request('category'),
            'seminar' => request('seminar'),
            'date' => request('date'),
            'hours' => request('hours'),
            'certificate' => request('certificate'),
            'location' => request('location')
        ]);

        return back();
    }
}
