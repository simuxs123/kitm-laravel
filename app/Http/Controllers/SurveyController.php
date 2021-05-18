<?php

namespace App\Http\Controllers;


use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function survey()
    {

        return view('admin.pages.survey');
    }

    public function saveSurvey(Request $request)
    {
        $validatedData = $request->validate([
            'group'=>'required',
            'attendance'=>'required',
            'module_is_important'=>'required',
            'module_material_is_important'=>'required',
            'module_advanced_methods'=>'required',
            'assessment_and_procedure'=>'required',
            'the_teacher_virtually_teaches'=>'required',
            'good_resources'=>'required',
            'safe_environment'=>'required',
            'quality'=>'required',
            'preferences'=>'required',
            'recommendation'
        ]);
        Survey::create([
            'group' => request('group'),
            'attendance' => request('attendance'),
            'module_is_important' => request('module_is_important'),
            'module_material_is_important' => request('module_material_is_important'),
            'module_advanced_methods' => request('module_advanced_methods'),
            'assessment_and_procedure' => request('assessment_and_procedure'),
            'the_teacher_virtually_teaches' => request('the_teacher_virtually_teaches'),
            'good_resources' => request('good_resources'),
            'safe_environment' => request('safe_environment'),
            'quality' => request('quality'),
            'preferences' => request('preferences'),
            'recommendation' => request('recommendation')
        ]);
        return redirect('/');


    }

}
