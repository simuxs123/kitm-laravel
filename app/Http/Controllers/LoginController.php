<?php

namespace App\Http\Controllers;

use App\KitmUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Survey;
use App\SelfAssessment;
use App\Guide;
use App\Traffics;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    public function home(){
        $viewData = $this->loadViewData();
        $mokytojai = KitmUsers::where(['roles_id' => 3])->orWhere(['roles_id' => 1])->count();
        $mokiniai = KitmUsers::where(['roles_id' => 4])->count();
        $apklausos = Survey::all()->count();
        $naujausi = KitmUsers::orderBy('created_at', 'DESC')->take(3)->get();
        $prisijungimai = Traffics::where('visitor', '>', 0)->sum('visits');
        $teachers = KitmUsers::where(['roles_id' => 3])->orWhere(['roles_id' => 1])->get();
        $sausis = Traffics::sum('Jan');
        $vasaris = Traffics::sum('Feb');
        $kovas = Traffics::sum('Mar');
        $balandis = Traffics::sum('Apr');
        $geguze = Traffics::sum('May');
        $birzelis = Traffics::sum('Jun');
        $liepa = Traffics::sum('Jul');
        $rugpjutis = Traffics::sum('Aug');
        $rugsejis = Traffics::sum('Sep');
        $spalis = Traffics::sum('Oct');
        $lapkritis = Traffics::sum('Nov');
        $gruodis = Traffics::sum('Dec');
        $menesiai = array ();
        array_push($menesiai, $sausis, $vasaris, $kovas, $balandis, $geguze, $birzelis, $liepa, $rugpjutis, $rugsejis, $spalis, $lapkritis, $gruodis);
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

        $usercheck = KitmUsers::where(['email' => session('userEmail')])->first();
        if (!$usercheck == null) {
            $time = Carbon::now()->subDays(1)->endOfDay();
            $year = Carbon::now()->subYears(1)->endOfYear();
            $last = Traffics::where(['visitor' => 0])->first();
    
            if ($last->updated_at <= $time) {
                Traffics::query()->update(['visits' => 0]);
            }
            
            if ($last->updated_at < $year) {
                Traffics::query()->update(['Jan' => 0]);
                Traffics::query()->update(['Feb' => 0]);
                Traffics::query()->update(['Mar' => 0]);
                Traffics::query()->update(['Apr' => 0]);
                Traffics::query()->update(['May' => 0]);
                Traffics::query()->update(['Jun' => 0]);
                Traffics::query()->update(['Jul' => 0]);
                Traffics::query()->update(['Aug' => 0]);
                Traffics::query()->update(['Sep' => 0]);
                Traffics::query()->update(['Oct' => 0]);
                Traffics::query()->update(['Nov' => 0]);
                Traffics::query()->update(['Dec' => 0]);
            }
            
            Traffics::where(['visitor' => 0])->increment('visits');
            $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
            Traffics::firstOrCreate(['visitor' => $id]);
            Traffics::where(['visitor' => $id])->increment('visits');
    
            $current = Carbon::now()->format('M');
            Traffics::where(['visitor' => $id])->increment($current);
        }

        return view('admin.pages.welcome',$viewData, compact('mokytojai', 'mokiniai', 'apklausos', 'naujausi', 'result', 'prisijungimai', 'menesiai'));
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
