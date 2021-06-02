<?php

namespace App\Http\Controllers;

use App\Module;
use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function survey(Module $module)
    {

        return view('admin.pages.survey', compact('module'));
    }
    public function saveSurvey(Request $request, Module $module)
    {
        $teacher_id = Module::where(['id' => $module->id])->first();
        $validatedData = $request->validate([
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
            'recommendation' => 'required'
        ]);
        Survey::create([
            'module_id' => $module->id,
            'teacher_id' => $teacher_id->teacher_id,
            'module_name' => $module->module_name,
            'group' => $module->group_name,
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
