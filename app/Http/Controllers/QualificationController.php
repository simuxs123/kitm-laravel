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
        $teachers = KitmUsers::where(['roles_id' => 3])->orWhere(['roles_id' => 1])->get();
        $results = array();
        foreach ($teachers as $teacher) {
            $sum = Qualification::where(['user_id' => $teacher->id])->sum('hours');
            array_push($results, [$teacher->name, $teacher->surname, $sum]);
        }


        return view('admin.pages.qualification', compact('name', 'surname', 'list', 'results'));
    }

    public function saveQuali(Request $request)
    {
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;

        $validateData = $request->validate([
            'date' => 'before_or_equal:today|after:1900-01-01'
        ]);

        if (!Qualification::where(['user_id' => $id])->where('certificate', '=', request('certificate'))->exists()) {
            if (!Qualification::where(['user_id' => $id])->where('seminar', '=', request('seminar'))->exists()) {
                Qualification::create([
                    'user_id' => $id,
                    'name' => request('name'),
                    // 'surname' => request('surname'),
                    'duty' => request('duty'),
                    'category' => request('category'),
                    'seminar' => request('seminar'),
                    'date' => request('date'),
                    'hours' => request('hours'),
                    'certificate' => request('certificate'),
                    'location' => request('location')
                ]);

                return back();
            } else {
                return back()->with('danger', 'Toks seminaras jau įrašytas');
            }
        } else {
            return back()->with('danger', 'Toks pažymėjimo numeris jau egzistuoja');
        }
    }

    public function removeQuali(Qualification $item)
    {
        Qualification::where(['id' => $item->id])->delete();

        return back();
    }
}
