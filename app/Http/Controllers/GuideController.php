<?php

namespace App\Http\Controllers;

use App\Guide;
use App\KitmUsers;
use App\SelfAssessment;
use App\Survey;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function guide($survey)
    {
        return view('admin.pages.guide', compact('survey'));
    }

    public function storeGuide(Request $request, $survey)
    {
        $validatedData = $request->validate([
            'first_number_of_lessons_discussed_by_the_supervisor'=>'required',
            // 'second_number_of_lessons_discussed_by_the_supervisor'=>'required',
            // 'third_number_of_lessons_discussed_by_the_supervisor'=>'required',
            'managers_comment_on_activities_and_suggestions'=>'required',
            'assistance_in_the_next_school_year'=>'required',
            'first_help_which_I_need'=>'required',
            // 'second_help_which_I_need'=>'required',
            // 'third_help_which_I_need'=>'required',
            'guide_evaluation'=>'required'
        ]);

        Guide::create([
            'user_id' => $survey,
            'first_number_of_lessons_discussed_by_the_supervisor' => request('first_number_of_lessons_discussed_by_the_supervisor'),
            // 'second_number_of_lessons_discussed_by_the_supervisor' => request('second_number_of_lessons_discussed_by_the_supervisor'),
            // 'third_number_of_lessons_discussed_by_the_supervisor' => request('third_number_of_lessons_discussed_by_the_supervisor'),
            'managers_comment_on_activities_and_suggestions' => request('managers_comment_on_activities_and_suggestions'),
            'assistance_in_the_next_school_year' => request('assistance_in_the_next_school_year'),
            'first_help_which_I_need' => request('first_help_which_I_need'),
            // 'second_help_which_I_need' => request('second_help_which_I_need'),
            // 'third_help_which_I_need' => request('third_help_which_I_need'),
            'guide_evaluation' => request('guide_evaluation')
        ]);

        SelfAssessment::where(['user_id' => $survey])->update([
            'vertinta' => true
        ]);

        return redirect('/');
    }
}
