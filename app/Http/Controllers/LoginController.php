<?php

namespace App\Http\Controllers;

use App\KitmUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Survey;
use App\SelfAssessment;
use App\Guide;
use Maatwebsite\Excel\Concerns\ToArray;

class LoginController extends Controller
{
    public function home(){
        $viewData = $this->loadViewData();
        $mokytojai = KitmUsers::where(['roles_id' => 3])->orWhere(['roles_id' => 1])->count();
        $mokiniai = KitmUsers::where(['roles_id' => 4])->count();
        $apklausos = Survey::all()->count();
        $naujausi = KitmUsers::orderBy('created_at', 'DESC')->take(3)->get();
        
        $teachers = KitmUsers::where(['roles_id' => 3])->orWhere(['roles_id' => 1])->get();
        $reports = array();
        
        $average = 0;

        foreach ($teachers as $teacher) {
            $check = SelfAssessment::where(['user_id' => $teacher->id])->first();
            $assessmentcheck = SelfAssessment::where(['user_id' => $teacher->id])->exists() && $check['pateikta'] > 0;
            $surveycheck = Survey::where(['teacher_id' => $teacher->id])->exists();
            $guidecheck = Guide::where(['user_id' => $teacher->id])->exists();
            $scores = array();
            
            if (($assessmentcheck && $surveycheck && $guidecheck) == true) {
                $assScores = SelfAssessment::where(['user_id' => $teacher->id])->first();
                $surveyScores = Survey::where(['teacher_id' => $teacher->id])->get();
                $guideScores = Guide::where(['user_id' => $teacher->id])->first();
                
                foreach ($surveyScores as $score) {
                    array_push($scores, $score->quality);
                }
                array_push($scores, $assScores->{'3_hours'}, $assScores->{'3_I'}, $assScores->{'3_II'}, $assScores->{'3_III'}, $guideScores->guide_evaluation);
                $average = intval(round(array_sum($scores) / count($scores)));
                array_push($reports, [$teacher->name, $teacher->surname, $average]);
            }
            unset($scores);
            $scores = array();
        }

        $collect = collect($reports);
        $array = $collect->sortByDesc(2)->toArray();
        $result = array_slice($array, 0, 3);

        return view('admin.pages.welcome',$viewData, compact('mokytojai', 'mokiniai', 'apklausos', 'naujausi', 'result'));
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
